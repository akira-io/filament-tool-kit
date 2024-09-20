<?php

declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/makeTableColumns.php';
require __DIR__.'/makeExportColumns.php';
require __DIR__.'/makeFormFields.php';
require __DIR__.'/makeInfoListEntries.php';

function convertToPascalCase($fieldName)
{
    return str_replace(' ', '', ucwords(str_replace('_', ' ', $fieldName)));
}

function convertToHumanReadable($fieldName)
{
    return ucwords(str_replace('_', ' ', $fieldName));
}
