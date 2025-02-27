<?php

namespace RalphJSmit\Filament\Components\Forms;

use Closure;
use Filament\Forms\Components\Grid;

class Sidebar
{
    public function __construct(
        public array | Closure $mainComponents,
        public array | Closure $sidebarComponents
    ) {}

    public static function make(array | Closure $mainComponents, array | Closure $sidebarComponents): Grid
    {
        return Grid::make(['sm' => 3])->schema([
            Grid::make()->schema($mainComponents)->columnSpan(['sm' => 2]),
            Grid::make()->schema($sidebarComponents)->columnSpan(['sm' => 1]),
        ]);
    }
}
