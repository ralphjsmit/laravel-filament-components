<?php

use Illuminate\Support\Carbon;
use Livewire\Livewire;
use RalphJSmit\Filament\Components\Forms\UpdatedAt;
use RalphJSmit\Filament\Components\Tests\Support\Record;
use RalphJSmit\Filament\Components\Tests\Support\TestableForm;

use function Spatie\PestPluginTestTime\testTime;

it('can return a dash if the updated at time is null', function () {
    TestableForm::$formSchema = [
        UpdatedAt::new(),
    ];

    testTime()->freeze();

    $component = Livewire::test(TestableForm::class, [
        'record' => $record = Record::factory()->make(['updated_at' => null]),
    ]);

    $component
        ->assertSet('record.updated_at', null)
        ->assertSee('-');
});

it('can return the updated at time', function () {
    TestableForm::$formSchema = [
        UpdatedAt::new(),
    ];

    testTime()->freeze();

    $component = Livewire::test(TestableForm::class, [
        'record' => $record = Record::factory()->make(['updated_at' => now()->subMinutes(10)]),
    ]);

    $component
        ->assertSet('record.updated_at', fn (Carbon $value) => $value !== null && $value->gt(now()->subMinutes(10)->subSecond()))
        ->assertSee('10 minutes ago');
});
