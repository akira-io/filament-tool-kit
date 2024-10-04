<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

$translationFilePath = __DIR__.'/../resources/lang/pt_PT.json';

function generateFormComponents(
    string $componentType,
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
        $className = convertToPascalCase($fieldName).ucfirst($componentType);
        $humanReadableKey = convertToHumanReadable($fieldName);
        $filePath = "$namespacePath/$className.php";

        if (file_exists($filePath)) {
            continue; // Skip if the class file already exists
        }

        // Initialize skeleton content variable
        $skeletonContent = '';

        // Set skeleton content based on component type
        if ($componentType === 'DatePicker') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Forms\Components\DatePicker;

final class $className
{
    public static function make(): DatePicker
    {
        return DatePicker::make('$fieldName')
            ->label(__('{$humanReadableKey}'))
            ->displayFormat(config('tool-kit.date_format'))
            ->prefixIcon('heroicon-o-calendar')
            ->native(false);
    }
}

PHP;
        } elseif ($componentType === 'TextInput') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Forms\Components\TextInput;

final class $className
{
    public static function make(): TextInput
    {
        return TextInput::make('$fieldName')
            ->label(__('{$humanReadableKey}'));
    }
}

PHP;
        } elseif ($componentType === 'Select') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Forms\Components\Select;

final class $className
{
    public static function make(): Select
    {
        return Select::make('$fieldName')
            ->searchable()
            ->preload()
            ->label(__('{$humanReadableKey}'));
    }
}

PHP;
        } elseif ($componentType === 'TextArea') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Forms\Components\Textarea;

final class $className
{
    public static function make(): Textarea
    {
        return Textarea::make('$fieldName')
            ->label(__('{$humanReadableKey}'));
    }
}

PHP;
        } elseif ($componentType === 'Toggle') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Forms\Components\Toggle;

final class $className
{
    public static function make(): Toggle
    {
        return Toggle::make('$fieldName')
            ->label(__('{$humanReadableKey}'));
    }
}

PHP;
        } elseif ($componentType === 'RichEditor') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Forms\Components\RichEditor;

final class $className
{
    public static function make(): RichEditor
    {
        return RichEditor::make('$fieldName')
            ->label(__('{$humanReadableKey}'));
    }
   
}

PHP;
        } elseif ($componentType === 'FileUpload') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Forms\Components\FileUpload;

final class $className
{
    public static function make(): FileUpload
    {
        return FileUpload::make('$fieldName')
            ->image()
            ->label(__('{$humanReadableKey}'));
    }
}

PHP;
        }

        // Check if skeletonContent was set before writing to file
        if ($skeletonContent) {
            file_put_contents($filePath, $skeletonContent);
            $createdResources[] = "Class created at: $filePath";

            if (isset($existingTranslations[$humanReadableKey])) {
                continue; // Skip if the translation key already exists
            }

            $existingTranslations[$humanReadableKey] = $translationValue;
        }
    }

    file_put_contents($translationFilePath, json_encode($existingTranslations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    $createdResources[] = 'Translations updated in pt_PT.json.';

    return $createdResources;
}
// Usage examples
$createdDatePickers = generateFormComponents(
    'DatePicker',
    __DIR__.'/form/date_pickers.json',
    'Akira\\FilamentToolKit\\Form\\DatePickers',
    __DIR__.'/../src/Form/DatePickers',
    $translationFilePath
);

$createdTextInputs = generateFormComponents(
    'TextInput',
    __DIR__.'/form/text_inputs.json',
    'Akira\\FilamentToolKit\\Form\\Inputs',
    __DIR__.'/../src/Form/Inputs',
    $translationFilePath
);

$createdToggles = generateFormComponents(
    'Toggle',
    __DIR__.'/form/toggles.json',
    'Akira\\FilamentToolKit\\Form\\Toggles',
    __DIR__.'/../src/Form/Toggles',
    $translationFilePath
);

$createdFileUploads = generateFormComponents(
    'FileUpload',
    __DIR__.'/form/uploads.json',
    'Akira\\FilamentToolKit\\Form\\Uploads',
    __DIR__.'/../src/Form/Uploads',
    $translationFilePath
);

$createTextArea = generateFormComponents(
    'TextArea',
    __DIR__.'/form/textarea.json',
    'Akira\\FilamentToolKit\\Form\\Textareas',
    __DIR__.'/../src/Form/Textareas',
    $translationFilePath
);

$createRichEditor = generateFormComponents(
    'RichEditor',
    __DIR__.'/form/rich-editors.json',
    'Akira\\FilamentToolKit\\Form\\RichEditors',
    __DIR__.'/../src/Form/RichEditors',
    $translationFilePath
);

$createSelects = generateFormComponents(
    'Select',
    __DIR__.'/form/selects.json',
    'Akira\\FilamentToolKit\\Form\\Selects',
    __DIR__.'/../src/Form/Selects',
    $translationFilePath
);

// Show logs with created resources
$createdResources = array_merge($createdDatePickers, $createdTextInputs,
    $createdToggles, $createdFileUploads, $createTextArea, $createRichEditor);
if (! empty($createdResources)) {
    echo "Created resources:\n".implode("\n", $createdResources);
} else {
    echo 'No new resources created.';
}
