<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Commands;

use Akira\FilamentToolKit\Support\Commands\Concerns\CanBeGenerated;
use Akira\FilamentToolKit\Support\Commands\Concerns\CanGenerateFormFields;
use Akira\FilamentToolKit\Support\Commands\Concerns\CanGenerateInfoListEntries;
use Akira\FilamentToolKit\Support\Commands\Concerns\CanGenerateTableColumns;
use Akira\FilamentToolKit\Support\Commands\Concerns\CanManipulateFiles;
use Akira\FilamentToolKit\Support\Commands\Concerns\InteractsWithGithub;
use Exception;
use Filament\Facades\Filament;
use Filament\Panel;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ViewRecord;
use Filament\Resources\Resource;
use Filament\Support\Commands\Concerns\CanIndentStrings;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

use function Laravel\Prompts\select;
use function Laravel\Prompts\text;

final class MakeResourceCommand extends Command
{
    use CanBeGenerated;
    use CanGenerateFormFields;
    use CanGenerateInfoListEntries;
    use CanGenerateTableColumns;
    use CanIndentStrings;
    use CanManipulateFiles;
    use InteractsWithGithub;

    public $signature = 'tool-kit:resource{model? : The model name} {--F|force} {--model-namespace=} {--panel=} {--simple} {--multiple } {--generate}}';

    public $description = 'generate a new Tool Kit resource';

    /**
     * @throws Exception
     */
    public function handle(): int
    {
        $models = $this->argument('model');

        $panel = $this->option('panel');

        if ($panel) {
            $panel = Filament::getPanel($panel);
        }

        if (! $panel) {

            $panels = Filament::getPanels();

            $panel = (count($panels) > 1) ? $panels[select(
                label: 'Which panel would you like to create this in?',
                options: array_map(
                    /**
                     * @throws Exception
                     */ fn (Panel $panel): string => $panel->getId(),
                    $panels,
                ),
                default: Filament::getDefaultPanel()->getId(),
            )] : Arr::first($panels);
        }

        $_models = explode(',', $models);

        if ($this->option('multiple')) {

            $_models = array_filter($_models, fn (string $model): bool => $model !== '');

            foreach ($_models as $model) {
                $this->handleCommand(panel: $panel, model: $model);
            }
            rd();
        } else {
            $model = $_models[0];
            $this->handleCommand($panel, $model);
        }

        return self::SUCCESS;
    }

    private function handleCommand(Panel $panel, ?string $model = null): ?int
    {
        $model = str($model ?? text(
            label: 'What is the model name?',
            placeholder: 'User',
            required: true,
        ))
            ->studly()
            ->beforeLast('Resource')
            ->trim('/')
            ->trim('\\')
            ->trim(' ')
            ->studly()
            ->replace('/', '\\');

        if (blank($model)) {
            $model = 'Resource';
        }

        // $tableColumns = SchemaFacade::getColumns(str($model)->snake()->plural());

        $modelClass = (string) str($model)->afterLast('\\');
        if (str($model)->contains('\\')) {
            str($model)->beforeLast('\\');
        }

        $modelNamespace = $this->option('model-namespace') ?? 'App\\Models';
        $pluralModelClass = (string) str($modelClass)->pluralStudly();

        $needsAlias = $modelClass === 'Record';

        $resourceDirectories = $panel->getResourceDirectories();
        $resourceNamespaces = $panel->getResourceNamespaces();

        $namespace = (count($resourceNamespaces) > 1) ?
            select(
                label: 'Which namespace would you like to create this in?',
                options: $resourceNamespaces,
            ) :
            (Arr::first($resourceNamespaces) ?? 'App\\Filament\\Resources');

        $path = (count($resourceDirectories) > 1) ?
            $resourceDirectories[array_search($namespace, $resourceNamespaces)] :
            (Arr::first($resourceDirectories) ?? app_path('Filament/Resources/'));

        $resource = "{$model}Resource";
        $resourceModelPath = str($model)->plural();

        // resource
        $baseResourcePath =
            (string) str($resourceModelPath)
                ->prepend('/')
                ->prepend($path)
                ->replace('\\', '/')
                ->replace('//', '/');

        $resourcePath = "{$baseResourcePath}/{$resource}.php";
        $resourceClass = "{$modelClass}Resource";

        // pages
        $resourcePagesPath = "{$baseResourcePath}/Pages/{$modelClass}Pages.php";
        $viewPagePath = "{$baseResourcePath}/Pages/View{$modelClass}.php";
        $editPagePath = "{$baseResourcePath}/Pages/Edit{$modelClass}.php";
        $listPagePath = "{$baseResourcePath}/Pages/List{$pluralModelClass}.php";
        $createPagePath = "{$baseResourcePath}/Pages/Create{$modelClass}.php";
        $listResourcePageClass = "List{$pluralModelClass}";
        $createResourcePageClass = "Create{$modelClass}";
        $editResourcePageClass = "Edit{$modelClass}";
        $viewResourcePageClass = "View{$modelClass}";

        // infoList
        $infoListPagesDirectory = "{$baseResourcePath}/InfoLists";
        $infolistPath = "{$infoListPagesDirectory}/{$modelClass}InfoList.php";
        $infolistSchemaPath = "{$infoListPagesDirectory}/{$modelClass}InfoListSchema.php";

        // actions
        $actionsDirectory = "{$baseResourcePath}/Actions";
        $editPageActionPath = "{$actionsDirectory }/Pages/{$modelClass}EditHeaderAction.php";

        // tables
        $tablesPagesDirectory = "{$baseResourcePath}/Tables";
        $tablesPath = "{$tablesPagesDirectory}/{$modelClass}Table.php";

        // forms
        $formsPagesDirectory = "{$baseResourcePath}/Forms";

        $formsPath = "{$formsPagesDirectory}/{$modelClass}Form.php";

        // relations
        $relationsPagesDirectory = "{$baseResourcePath}/RelationManagers";

        $relationsPath = "{$relationsPagesDirectory}/{$modelClass}Relations.php";

        if (! $this->option('force') && $this->checkForCollision([
            $resourcePath,
            $resourcePagesPath,
            $viewPagePath,
            $editPagePath,
            $listPagePath,
            $createPagePath,
            $editPageActionPath,
            $tablesPath,
            $formsPath,
            $infolistPath,
            $infolistSchemaPath,
            $relationsPath,
        ])) {
            return self::INVALID;
        }

        $this->copyStubToApp('Resource', $resourcePath, [
            'baseResource' => Resource::class.($needsAlias ? ' as BaseResource' : ''),
            'baseResourceClass' => $needsAlias ? 'BaseResource' : 'Resource',
            'model' => "{$modelNamespace}\\{$modelClass}",
            'modelClass' => $modelClass,
            'namespace' => $namespace,
            'resource' => $resource,
            'resourceClass' => $resourceModelPath,
            'resourceClassName' => $resource,
            'resourceLabel' => ucfirst(str_replace('_', ' ', (string) str($modelClass)->snake())),
            'resourcePluralLabel' => ucfirst(str_replace('_', ' ', (string)
            str($pluralModelClass)->snake())),
        ]);

        $listPage = "'index' => List{$pluralModelClass}::route('/'),".PHP_EOL;
        $createPage = "'create' => Create{$modelClass}::route('/create'),".PHP_EOL;
        $viewPage = "'view' => View{$modelClass}::route('/{record}'),".PHP_EOL;
        $editPage = "'edit' => Edit{$modelClass}::route('/{record}/edit'),".PHP_EOL;

        $pages = $listPage.$createPage.$viewPage.$editPage;

        if ($this->option('simple')) {
            $pages = $listPage.$viewPage;
        }

        $this->copyStubToApp('ResourcePages', $resourcePagesPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Pages",
            'modelClass' => $modelClass,
            'pluralModelClass' => $pluralModelClass,
            'pages' => $this->indentString($pages, 3),
        ]);

        $this->copyStubToApp('ViewPage', $viewPagePath, [
            'baseResourcePage' => ViewRecord::class.($needsAlias ? ' as BaseViewRecord' : ''),
            'baseResourcePageClass' => $needsAlias ? 'BaseViewRecord' : 'ViewRecord',
            'namespace' => "{$namespace}\\{$resourceModelPath}",
            'resource' => "{$namespace}\\{$resourceModelPath}",
            'resourceClass' => $resourceClass,
            'resourcePageClass' => $viewResourcePageClass, 'modelClass' => $modelClass,
        ]);

        $editPageActions[] = 'Actions\DeleteAction::make(),';

        $editPageActions = implode(PHP_EOL, $editPageActions);

        if (! $this->option('simple')) {

            $this->copyStubToApp('EditPage', $editPagePath, [
                'baseResourcePage' => EditRecord::class.($needsAlias ? ' as BaseEditRecord' : ''),
                'baseResourcePageClass' => $needsAlias ? 'BaseEditRecord' : 'EditRecord',
                'actions' => $this->indentString($editPageActions, 3),
                'namespace' => "{$namespace}\\{$resourceModelPath}\\Pages",
                'resource' => "{$namespace}\\{$resourceModelPath}",
                'resourceClass' => $resourceClass,
                'resourcePageClass' => $editResourcePageClass,
            ]);

            $this->copyStubToApp('CreatePage', $createPagePath, [
                'baseResourcePage' => CreateRecord::class.($needsAlias ? ' as BaseCreateRecord' : ''),
                'baseResourcePageClass' => $needsAlias ? 'BaseCreateRecord' : 'CreateRecord',
                'namespace' => "{$namespace}\\{$resourceModelPath}\\Pages",
                'resource' => "{$namespace}\\{$resourceModelPath}",
                'resourceClass' => $resourceClass,
                'resourcePageClass' => $createResourcePageClass,
            ]);
        }

        $this->copyStubToApp('ListPage', $listPagePath, [
            'baseResourcePage' => ListRecords::class.($needsAlias ? ' as BaseListRecords' : ''),
            'baseResourcePageClass' => $needsAlias ? 'BaseListRecords' : 'ListRecords',
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Pages",
            'resource' => "{$namespace}\\{$resourceModelPath}",
            'resourceClass' => $resourceClass,
            'resourcePageClass' => $listResourcePageClass,
        ]);

        $this->copyStubToApp('EditHeaderAction', $editPageActionPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}",
            'modelClass' => $modelClass,
        ]);

        $this->copyStubToApp('Table', $tablesPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Tables",
            'modelClass' => $modelClass,
        ]);

        $tableActionsPath = "{$tablesPagesDirectory}/{$modelClass}TableActions.php";

        $this->copyStubToApp('TableActions', $tableActionsPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Tables",
            'modelClass' => $modelClass,
        ]);

        $tableBulkActionsPath = "{$tablesPagesDirectory}/{$modelClass}TableBulkActions.php";

        $this->copyStubToApp('TableBulkActions', $tableBulkActionsPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Tables",
            'modelClass' => $modelClass,
        ]);

        $tableFiltersPath = "{$tablesPagesDirectory}/{$modelClass}TableFilters.php";

        $this->copyStubToApp('TableFilters', $tableFiltersPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Tables",
            'modelClass' => $modelClass,
        ]);

        $tableColumnsPath = "{$tablesPagesDirectory}/{$modelClass}TableColumns.php";

        $this->copyStubToApp('TableColumns', $tableColumnsPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Tables",
            'modelClass' => $modelClass,
        ]);

        $this->copyStubToApp('Form', $formsPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Forms",
            'modelClass' => $modelClass,
        ]);

        $formSchemaPath = "{$formsPagesDirectory}/{$modelClass}FormSchema.php";

        $this->copyStubToApp('FormSchema', $formSchemaPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Forms",
            'modelClass' => $modelClass,
        ]);

        // relations

        $this->copyStubToApp('Relations', $relationsPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\RelationManagers",
            'modelClass' => $modelClass,
        ]);

        // infolist

        $this->copyStubToApp('InfoList', $infolistPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\InfoLists",
            'modelClass' => $modelClass,
        ]);

        $this->copyStubToApp('InfoListSchema', $infolistSchemaPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\InfoLists",
            'modelClass' => $modelClass,
        ]);

        $tableColumns = $this->generateTableColumns("{$modelNamespace}\\{$modelClass}");

        $this->copyStubToApp('TableColumns', $tableColumnsPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Tables",
            'fqn' => $this->indentString(implode(PHP_EOL, $this->getTableImportStatements()), 0),
            'modelClass' => $modelClass,
            'columns' => $this->indentString($tableColumns, 3),
        ]);

        $formFields = $this->generateFormFields("{$modelNamespace}\\{$modelClass}");

        $this->copyStubToApp('FormSchema', $formSchemaPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\Forms",
            'fqn' => $this->indentString(implode(PHP_EOL, $this->getFormImportStatements()), 0),
            'modelClass' => $modelClass,
            'fields' => $this->indentString($formFields, 3),
        ]);

        $infoListEntries = $this->generateInfoListEntries("{$modelNamespace}\\{$modelClass}");

        $this->copyStubToApp('InfoListSchema', $infolistSchemaPath, [
            'namespace' => "{$namespace}\\{$resourceModelPath}\\InfoLists",
            'fqn' => $this->indentString(implode(PHP_EOL, $this->getInfoListImportStatements()), 0),
            'modelClass' => $modelClass,
            'entries' => $this->indentString($infoListEntries, 3),
        ]);

        return null;
    }
}
