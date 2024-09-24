<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Support\Commands\Concerns;

trait CanGenerateInfoListEntries
{
    use CanBeGenerated;
    use InteractsWithGithub;

    private array $infoListImportStatements = [];

    public function getInfoListImportStatements(): array
    {

        return $this->infoListImportStatements;
    }

    protected function generateInfoListEntries(string $modelClass): string
    {
        $columns = $this->getColumnListing($modelClass);

        $tableColumns = [];

        foreach ($columns as $column) {

            $tableFqn = $this->findInfoListEntriesMatchingColumnClass($column, $modelClass);

            if (in_array($column, ['created_at', 'updated_at', 'remember_token', 'password']) || str_ends_with($column, '_id')) {
                continue;
            }

            if (! $tableFqn) {

                $this->createGitHubIssue($column, 'InfoList');

                continue;
            }

            $this->infoListImportStatements[] = $this->generateUseStatement($tableFqn);

            $tableColumns = $this->makeColumns($tableFqn, $tableColumns);
        }

        return $this->formatColumns($tableColumns);
    }

    private function findInfoListEntriesMatchingColumnClass(string $columnName, string $modelClass): ?string
    {

        $tableName = $this->getTableFromModel($modelClass);

        $columnType = $this->getColumnType($tableName, $columnName);

        $className = $this->getClassName($columnName);

        if ($columnType === 'tinyint') {
            $className .= 'IconEntry';
            $namespace = 'Akira\\FilamentToolKit\\InfoList\\Entries\\';
        } else {
            $className .= 'TextEntry';
            $namespace = 'Akira\\FilamentToolKit\\InfoList\\Entries\\';
        }

        $tableFqn = $namespace.$className;

        if (class_exists($tableFqn)) {
            return '\\'.$tableFqn;
        }

        return null;
    }
}
