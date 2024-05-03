<?php

namespace alejandroaporras\FileVault;

use alejandroaporras\FileVault\Commands\FileVaultCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
