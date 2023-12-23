<?php

namespace DanielCristeaa\AwesomeAbTesting;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DanielCristeaa\AwesomeAbTesting\Commands\AwesomeAbTestingCommand;

class AwesomeAbTestingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-awesome-ab-testing')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-awesome-ab-testing_table')
            ->hasCommand(AwesomeAbTestingCommand::class);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/path/to/migrations');
    }
}
