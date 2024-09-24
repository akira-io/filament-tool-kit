<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Support\Commands\Concerns;

trait CanGenerateTableColumns
{
    use CanBeGenerated;
    use InteractsWithGithub;

    private array $tableImportStatements = [];

    public function getTableImportStatements(): array
    {

        return $this->tableImportStatements;
    }

    protected function generateTableColumns(string $modelClass): string
    {
        $columns = $this->getColumnListing($modelClass);

        $tableColumns = [];

        foreach ($columns as $column) {

            $tableFqn = $this->findTableMatchingColumnClass($column, $modelClass);

            if (in_array($column, ['password']) || str_ends_with($column, '_id')
            ) {
                continue;
            }

            if (! $tableFqn) {

                $this->createGitHubIssue($column, 'Table');

                continue;
            }

            $this->tableImportStatements[] = $this->generateUseStatement($tableFqn);

            $tableColumns = $this->makeColumns($tableFqn, $tableColumns);
        }

        return $this->formatColumns($tableColumns);
    }

    private function findTableMatchingColumnClass(string $columnName, string $modelClass): ?string
    {

        $tableName = $this->getTableFromModel($modelClass);

        $columnType = $this->getColumnType($tableName, $columnName);

        $className = $this->getClassName($columnName);

        if ($columnType === 'tinyint') {
            $className .= 'ToggleColumn';
            $namespace = 'Akira\\FilamentToolKit\\Table\\Columns\\Toggles\\';
        } else {
            $className .= 'TextColumn';
            $namespace = 'Akira\\FilamentToolKit\\Table\\Columns\\Text\\';
        }

        $tableFqn = $namespace.$className;

        if (class_exists($tableFqn)) {
            return '\\'.$tableFqn;
        }

        return null;
    }
}
