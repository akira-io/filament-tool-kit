<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Support\Commands\Concerns;

use Illuminate\Support\Facades\Schema;

trait CanBeGenerated
{
    private function getTableFromModel(string $modelClass): string
    {

        return (new $modelClass())->getTable();
    }

    private function getColumnListing(string $modelClass): array
    {

        $tableName = $this->getTableFromModel($modelClass);

        return Schema::getColumnListing($tableName);
    }

    private function getColumnType(string $tableName, string $columnName): string
    {

        return Schema::getColumnType($tableName, $columnName);
    }

    private function getClassName(string $columnName): string|array
    {

        return str_replace('_', '', ucwords($columnName, '_'));
    }

    private function makeColumns(string $tableFqn, array $tableColumns): array
    {

        $className = class_basename($tableFqn);

        $tableColumns[] = "{$className}::make(),";

        return $tableColumns;
    }

    private function generateUseStatement(string $tableFqn): string
    {

        return 'use '.ltrim($tableFqn, '\\').';';
    }

    private function formatColumns(array $tableColumns): string
    {

        $formattedColumns = array_map(function ($column) {

            return mb_str_pad($column, 30);
        }, $tableColumns);

        return implode(PHP_EOL, $formattedColumns);
    }
}
