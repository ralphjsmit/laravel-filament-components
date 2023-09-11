<?php

use Illuminate\Support\Carbon;
use Livewire\Livewire;
use RalphJSmit\Filament\Components\Forms\CreatedAt;
use RalphJSmit\Filament\Components\Tests\Support\Record;
use RalphJSmit\Filament\Components\Tests\Support\TestableForm;

use function Spatie\PestPluginTestTime\testTime;

it('can return a dash if the record is null', function () {
    TestableForm::$formSchema = [
        CreatedAt::make(),
    ];

    testTime()->freeze();

    $component = Livewire::test(TestableForm::class, [
        'record' => null,
    ]);

    $component
        ->assertSet('record.created_at', null)
        ->assertSee('-');
});

it('can return a dash if the created at time is null', function () {
    TestableForm::$formSchema = [
        CreatedAt::make(),
    ];

    testTime()->freeze();

    $component = Livewire::test(TestableForm::class, [
        'record' => $record = Record::factory()->create(['created_at' => null]),
    ]);

    $component
        ->assertSet('record.created_at', null)
        ->assertSee('-');
});

it('can return the created at time', function () {
    TestableForm::$formSchema = [
        CreatedAt::make(),
    ];

    testTime()->freeze();

    $component = Livewire::test(TestableForm::class, [
        'record' => $record = Record::factory()->create(['created_at' => now()->subMinutes(10)]),
    ]);

    $component
        ->assertSet('record.created_at', fn (Carbon $value) => $value !== null && $value->gt(now()->subMinutes(10)->subSecond()))
        ->assertSee('10 minutes ago');
});