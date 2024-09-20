<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

$translationFilePath = __DIR__.'/../resources/lang/pt_PT.json';

function generateExportColumns(
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

        // Initialize skeleton content variable
        $skeletonContent = '';

        // Set skeleton content based on column type
        if ($columnType === 'Export') {
            $skeletonContent = <<<PHP
<?php

declare(strict_types=1);

namespace $namespace;

use Filament\Actions\Exports\ExportColumn;

final class $className
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('$fieldName')
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

function convertToPascalCase($fieldName)
{
    return str_replace(' ', '', ucwords(str_replace('_', ' ', $fieldName)));
}

function convertToHumanReadable($fieldName)
{
    return ucwords(str_replace('_', ' ', $fieldName));
}

// Usage example for export columns
$createdExportColumns = generateExportColumns(
    'Export',
    __DIR__.'/export/columns.json',
    'Akira\\FilamentToolKit\\Export\\Columns',
    __DIR__.'/../src/Export/Columns',
    $translationFilePath
);

// Show logs with created resources
if (! empty($createdExportColumns)) {
    echo "Created resources:\n".implode("\n", $createdExportColumns);
} else {
    echo 'No new resources created.';
}
