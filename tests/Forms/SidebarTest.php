<?php

use Livewire\Livewire;
use RalphJSmit\Filament\Components\Forms\Sidebar;
use RalphJSmit\Filament\Components\Tests\Support\TestableForm;

use function Spatie\PestPluginTestTime\testTime;

it('can create a sidebar', function () {
    TestableForm::$formSchema = [
        Sidebar::make(
            mainComponents: [
                \Filament\Forms\Components\Placeholder::make('dummy_placeholder'),
                \Filament\Forms\Components\Placeholder::make('dummy_placeholder_2'),
            ],
            sidebarComponents: [
                Filament\Forms\Components\TextInput::make('name')->label('Test label for sidebar component'),
                Filament\Forms\Components\TextInput::make('name')->label('Test label 2 for sidebar component'),
            ]
        ),
    ];

    testTime()->freeze();

    $component = Livewire::test(TestableForm::class);

    $component
        ->assertSee('dummy_placeholder')
        ->assertSee('dummy_placeholder_2')
        ->assertSee('Test label for sidebar component')
        ->assertSee('Test label 2 for sidebar component');
});