<?php

use Livewire\Livewire;
use RalphJSmit\Filament\Components\Forms\Timestamps;
use RalphJSmit\Filament\Components\Tests\Support\Record;
use RalphJSmit\Filament\Components\Tests\Support\TestableForm;

use function Spatie\PestPluginTestTime\testTime;

it('can return the timestamps', function () {
    TestableForm::$formSchema = [
        ...Timestamps::new(),
    ];

    testTime()->freeze();

    $component = Livewire::test(TestableForm::class, [
        'record' => $record = Record::factory()->make(['created_at' => now()->subMinutes(10), 'updated_at' => now()->subMinutes(15)]),
    ]);

    $component
        ->assertSet('record', $record)
        ->assertSee('10 minutes ago')
        ->assertSee('15 minutes ago');
});
