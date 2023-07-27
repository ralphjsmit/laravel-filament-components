<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Form as FormV2;

class Sidebar
{
    public function __construct(
        public FormV2|Form $form,
    ) {}

    public static function make(FormV2|Form|null $form = null): static
    {
        if ( ! $form ) {
            $form = match ( true ) {
                class_exists(FormV2::class) => FormV2::make(),
                default => Form::make(),
            };
        }

        return new static(form: $form);
    }

    public function schema(array $mainComponents, array $sidebarComponents): FormV2|Form
    {
        return $this->form->schema([
            Grid::make(['sm' => 3])->schema([
                Grid::make()->schema($mainComponents)->columnSpan(['sm' => 2]),
                Grid::make()->schema($sidebarComponents)->columnSpan(['sm' => 1]),
            ]),
        ]);
    }
}
