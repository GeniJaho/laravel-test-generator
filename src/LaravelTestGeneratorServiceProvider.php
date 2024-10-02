<?php

namespace GeniJaho\LaravelTestGenerator;

use GeniJaho\LaravelTestGenerator\Commands\LaravelTestGeneratorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTestGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-test-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_test_generator_table')
            ->hasCommand(LaravelTestGeneratorCommand::class);
    }
}
