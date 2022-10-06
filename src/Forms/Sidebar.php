<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Grid;
use Filament\Resources\Form;

class Sidebar
{
    public function __construct(
        public Form $form,
        protected bool $sidebarSticky = false
    ) {}

    public static function make(Form $form = null): static
    {
        if ( ! $form ) {
            $form = Form::make();
        }

        return new static(form: $form);
    }

    public function stickySidebar(bool $sticky = true): static
    {
        $this->sidebarSticky = $sticky;

        return $this;
    }

    public function schema(array $mainComponents, array $sidebarComponents): Form
    {
        $mainGrid = Grid::make()->schema($mainComponents)->columnSpan(['sm' => 2]);
        $sidebarGrid = Grid::make()->schema($sidebarComponents)->columnSpan(['sm' => 1]);

        if ( $this->sidebarSticky ) {
            $sidebarGrid = $sidebarGrid->extraAttributes([
                'class' => 'filament-components-sticky',
            ]);
        }

        return $this->form->schema([
            Grid::make(['sm' => 3])->schema([
                $mainGrid,
                $sidebarGrid,
            ])->extraAttributes(['class' => 'XYZ']),
        ]);
    }
}
