<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit;

use Akira\FilamentToolKit\Commands\MakePageCommand;
use Akira\FilamentToolKit\Commands\MakeRelationManagerCommand;
use Akira\FilamentToolKit\Commands\MakeResourceCommand;
use Akira\FilamentToolKit\Testing\TestsFilamentToolKit;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

final class FilamentToolKitServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-tool-kit';

    public static string $viewNamespace = 'filament-tool-kit';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(self::$name)
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
//                    ->publishMigrations()
//                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('akira/filament-tool-kit');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(self::$viewNamespace);
        }
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        // Icon Registration
        FilamentIcon::register($this->getIcons());

        // Handle Stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__.'/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/filament-tool-kit/{$file->getFilename()}"),
                ], 'filament-tool-kit-stubs');
            }
        }

        // Testing
        Testable::mixin(new TestsFilamentToolKit());
    }

    protected function getAssetPackageName(): ?string
    {
        return 'akira/filament-tool-kit';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('filament-tool-kit', __DIR__ . '/../resources/dist/components/filament-tool-kit.js'),
            Css::make('filament-tool-kit-styles', __DIR__.'/../resources/dist/filament-tool-kit.css'),
            Js::make('filament-tool-kit-scripts', __DIR__.'/../resources/dist/filament-tool-kit.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
            MakeResourceCommand::class,
            MakeRelationManagerCommand::class,
            MakePageCommand::class,
        ];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_filament-tool-kit_table',
        ];
    }
}
