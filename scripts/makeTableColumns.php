<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

$translationFilePath = __DIR__.'/../resources/lang/pt_PT.json';

function generateColumns(
    string $columnType,
    string $fieldsPath,
    string $namespace,
    string $namespacePath,
    string $translationFilePath
) {
    if (! is_dir($namespacePath)) {
        mkdir($namespacePath, 0755, true);
    }

    if (! file_exists($fieldsPath)) {
        echo "Error: input file ($fieldsPath) not found.\n";
        exit(1);
    }

    $fields = json_decode(file_get_contents($fieldsPath), true);

    if (! $fields || ! is_array($fields)) {
        echo "Error: Invalid format in $fieldsPath.\n";
        exit(1);
    }

    $existingTranslations = file_exists($translationFilePath)
        ? json_decode(file_get_contents($translationFilePath), true) : [];

    $createdResources = [];

    foreach ($fields as $fieldName => $translationValue) {
        $className = convertToPascalCase($fieldName).ucfirst($columnType).'Column';
        $humanReadableKey = convertToHumanReadable($fieldName);
        $filePath = "$namespacePath/$className.php";

        if (file_exists($filePath)) {
            continue; // Skip if the class file already exists
        }

        // Check for the specific class name for the new skeleton
        if ($columnType === 'Toggle' && $fieldName === 'is_active') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Toggles;

use Filament\Tables\Columns\ToggleColumn;

final class $className
{
    public static function make(): ToggleColumn
    {
        return ToggleColumn::make('is_active')
            ->label(__('Inactive/Active'));
    }
}

PHP;
        } elseif ($columnType === 'Icon') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Tables\Columns\IconColumn;

final class $className
{
    public static function make(): IconColumn
    {
        return IconColumn::make('$fieldName')
            ->label(__('{$humanReadableKey}'))
            ->boolean();
    }
}

PHP;
        } elseif ($columnType === 'Toggle') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Tables\Columns\ToggleColumn;

final class $className
{
    public static function make(): ToggleColumn
    {
        return ToggleColumn::make('$fieldName')
            ->label(__('Inactive/Active'));
    }
}

PHP;
        } elseif ($columnType === 'Text') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Forms\Components\TextEntry;use Filament\Tables\Columns\TextColumn;

final class $className
{
    public static function make(): TextColumn
    {
        return TextEntry::make('$fieldName')
            ->label(__('{$humanReadableKey}'));
    }
}

PHP;
        } else {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Tables\Columns\\{$columnType}Column;

final class $className
{
    public static function make(): {$columnType}Column
    {
        return {$columnType}Column::make('$fieldName')
            ->label(__('{$humanReadableKey}'))
            ->badge();
    }
}

PHP;
        }

        file_put_contents($filePath, $skeletonContent);
        $createdResources[] = "Class created at: $filePath";

        if (isset($existingTranslations[$humanReadableKey])) {
            continue; // Skip if the translation key already exists
        }

        $existingTranslations[$humanReadableKey] = $translationValue;
    }

    file_put_contents($translationFilePath, json_encode($existingTranslations,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    $createdResources[] = 'Translations updated in pt_PT.json.';

    return $createdResources;
}

// Usage examples
$createdIcons = generateColumns('Icon', __DIR__.'/table/icons.json',
    'Akira\\FilamentToolKit\\Table\\Columns\\Icons',
    __DIR__.'/../src/Table/Columns/Icons', $translationFilePath);
$createdText = generateColumns('Text', __DIR__.'/table/text.json',
    'Akira\\FilamentToolKit\\Table\\Columns\\Text',
    __DIR__.'/../src/Table/Columns/Text', $translationFilePath);
$createdToggle = generateColumns('Toggle', __DIR__.'/table/toggles.json',
    'Akira\\FilamentToolKit\\Table\\Columns\\Toggles',
    __DIR__.'/../src/Table/Columns/Toggles', $translationFilePath);

// Show logs with created resources
$createdResources = array_merge($createdIcons, $createdText, $createdToggle);
if (! empty($createdResources)) {
    echo "Created resources:\n".implode("\n", $createdResources);
} else {
    echo 'No new resources created.';
}
