<?php

namespace RalphJSmit\Filament\Components\Tests;

use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Schemas\SchemasServiceProvider;
use Filament\Support\SupportServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use RalphJSmit\Filament\Components\FilamentComponentsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpDatabase();
    }

    protected function getPackageProviders(mixed $app): array
    {
        return [
            FilamentComponentsServiceProvider::class,
            FormsServiceProvider::class,
            SupportServiceProvider::class,
            SchemasServiceProvider::class,
            InfolistsServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function setUpDatabase()
    {
        $this->app->get('db')->connection()->getSchemaBuilder()->create('records', function (Blueprint $table) {
            $table->timestamps();
        });
    }
}
