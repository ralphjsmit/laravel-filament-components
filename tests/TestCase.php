<?php

namespace RalphJSmit\Filament\Components\Tests;

use Filament\Forms\FormsServiceProvider;
use Filament\Support\SupportServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use RalphJSmit\Filament\Components\FilamentComponentsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders(mixed $app): array
    {
        return [
            FilamentComponentsServiceProvider::class,
            LivewireServiceProvider::class,
            FormsServiceProvider::class,
            SupportServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        //
    }
}
