<?php

namespace AlejandroAPorras\FileVault;

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
            ->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(FileVault::class);
        $this->app->alias(FileVault::class, 'file-vault');
    }
}
