<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Support\Commands\Concerns;

trait CanGenerateFormFields
{
    use CanBeGenerated;
    use InteractsWithGithub;

    private array $formImportStatements = [];

    public function getFormImportStatements(): array
    {

        return $this->formImportStatements;
    }

    protected function generateFormFields(string $modelClass): string
    {
        $columns = $this->getColumnListing($modelClass);

        $tableColumns = [];

        foreach ($columns as $column) {

            $tableFqn = $this->findFormMatchingColumnClass($column, $modelClass);

            if (in_array($column, ['id', 'created_at', 'updated_at', 'remember_token', 'email_verified_at', 'deleted_at'])) {
                continue;
            }

            if (! $tableFqn) {

                $this->createGitHubIssue($column, 'Form');

                continue;
            }

            $this->formImportStatements[] = $this->generateUseStatement($tableFqn);

            $tableColumns = $this->makeColumns($tableFqn, $tableColumns);
        }

        return $this->formatColumns($tableColumns);
    }

    private function findFormMatchingColumnClass(string $columnName, string $modelClass): ?string
    {

        $tableName = $this->getTableFromModel($modelClass);

        $columnType = $this->getColumnType($tableName, $columnName);

        $className = $this->getClassName($columnName);

        if ($columnType === 'tinyint') {
            $className .= 'Toggle';
            $namespace = 'Akira\\FilamentToolKit\\Form\\Toggles\\';
        } elseif ($columnType === 'date') {
            $className .= 'DatePicker';
            $namespace = 'Akira\\FilamentToolKit\\Form\\DatePickers\\';
        } elseif ($columnType === 'text') {
            $className .= 'TextArea';
            $namespace = 'Akira\\FilamentToolKit\\Form\\Textareas\\';
        } else {
            $className .= 'TextInput';
            $namespace = 'Akira\\FilamentToolKit\\Form\\Inputs\\';
        }

        $tableFqn = $namespace.$className;

        if (class_exists($tableFqn)) {
            return '\\'.$tableFqn;
        }

        return null;
    }
}
