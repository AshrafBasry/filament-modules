<?php

namespace Coolsam\Modules;

use Coolsam\Modules\Commands\ModuleMakePanelCommand;
use Coolsam\Modules\Extensions\LaravelModulesServiceProvider;
use Filament\FilamentServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Coolsam\Modules\Commands\ModulesCommand;

class ModulesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('modules')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_modules_table')
            ->hasCommands([
                ModulesCommand::class,
                ModuleMakePanelCommand::class,
            ]);
    }
    public function register()
    {
//        $this->app->resolveProvider(FilamentServiceProvider::class);
        $this->app->register( LaravelModulesServiceProvider::class);
        return parent::register(); // TODO: Change the autogenerated stub
    }
}
