<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/makeTableColumns.php';
require __DIR__.'/makeExportColumns.php';
require __DIR__.'/makeFormFields.php';
require __DIR__.'/makeInfoListEntries.php';

function convertToPascalCase($fieldName): array|string
{
    return str_replace(' ', '', ucwords(str_replace('_', ' ', $fieldName)));
}

function convertToHumanReadable($fieldName): string
{
    $fieldName = preg_replace('/_id$/', '', $fieldName);

    return ucwords(str_replace('_', ' ', $fieldName));
}
