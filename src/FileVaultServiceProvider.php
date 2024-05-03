<?php

namespace alejandroaporras\FileVault;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use alejandroaporras\FileVault\Commands\FileVaultCommand;

class FileVaultServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('file-vault')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_file-vault_table')
            ->hasCommand(FileVaultCommand::class);
    }
}
