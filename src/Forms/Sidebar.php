<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Grid;
use Filament\Resources\Form;

class Sidebar
{
    public function __construct(
        public Form $form,
    ) {}

    public static function make(Form $form = null): static
    {
        if ( ! $form ) {
            $form = Form::make();
        }

        return new static(form: $form);
    }

    public function schema(array $mainComponents, array $sidebarComponents): Form
    {
        return $this->form->schema([
            Grid::make(['sm' => 3])->schema([
                Grid::make()->schema($mainComponents)->columnSpan(['sm' => 2]),
                Grid::make()->schema($sidebarComponents)->columnSpan(['sm' => 1]),
            ]),
        ]);
    }
}
