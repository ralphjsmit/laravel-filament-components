<?php

use Livewire\Livewire;
use RalphJSmit\Filament\Components\Forms\Sidebar;
use RalphJSmit\Filament\Components\Tests\Support\TestableForm;

use function Spatie\PestPluginTestTime\testTime;

it('can create a sidebar', function () {
    TestableForm::$formSchema = [
        Sidebar::new()->schema(
            mainComponents: [
                \Filament\Forms\Components\Placeholder::make('dummy_placeholder'),
            ],
            sidebarComponents: [
                Filament\Forms\Components\TextInput::make('name')->label('Test label for sidebar component'),
            ]
        )->getSchema()[0],
    ];

    testTime()->freeze();

    $component = Livewire::test(TestableForm::class);

    $component
        ->assertSee('dummy_placeholder')
        ->assertSee('Test label for sidebar component');
});
