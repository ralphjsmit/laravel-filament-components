<?php

namespace RalphJSmit\Filament\Components;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-filament-components')
            ->hasConfigFile()
            ->hasViews('filament-components')
            ->hasTranslations();
    }
}
