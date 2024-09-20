<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

$translationFilePath = __DIR__.'/../resources/lang/pt_PT.json';

function generateInfoListEntries(
    string $entryType,
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
        $className = convertToPascalCase($fieldName).ucfirst($entryType).'Entry';
        $humanReadableKey = convertToHumanReadable($fieldName);
        $filePath = "$namespacePath/$className.php";

        if (file_exists($filePath)) {
            continue; // Skip if the class file already exists
        }

        // Set skeleton content based on entry type
        if ($entryType === 'Icon') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Infolists\Components\IconEntry;

final class $className
{
    public static function make(): IconEntry
    {
        return IconEntry::make('$fieldName')
            ->label(__('{$humanReadableKey}'))
            ->boolean();
    }
}

PHP;
        } elseif ($entryType === 'Text') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Infolists\Components\TextEntry;

final class $className
{
    public static function make(): TextEntry
    {
        return TextEntry::make('$fieldName')
            ->label(__('{$humanReadableKey}'))
            ->columnSpanFull();
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

    file_put_contents($translationFilePath, json_encode($existingTranslations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    $createdResources[] = 'Translations updated in pt_PT.json.';

    return $createdResources;
}

function convertToPascalCase($fieldName)
{
    return str_replace(' ', '', ucwords(str_replace('_', ' ', $fieldName)));
}

function convertToHumanReadable($fieldName)
{
    return ucwords(str_replace('_', ' ', $fieldName));
}

// Usage examples
$createdIconEntries = generateInfoListEntries(
    'Icon',
    __DIR__.'/infoLists/icons.json',
    'Akira\\FilamentToolKit\\InfoList\\Entries',
    __DIR__.'/../src/InfoList/Entries',
    $translationFilePath
);

$createdTextEntries = generateInfoListEntries(
    'Text',
    __DIR__.'/infoLists/text.json',
    'Akira\\FilamentToolKit\\InfoList\\Entries',
    __DIR__.'/../src/InfoList/Entries',
    $translationFilePath
);

// Show logs with created resources
$createdResources = array_merge($createdIconEntries, $createdTextEntries);
if (! empty($createdResources)) {
    echo "Created resources:\n".implode("\n", $createdResources);
} else {
    echo 'No new resources created.';
}
