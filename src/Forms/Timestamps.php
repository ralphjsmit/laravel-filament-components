<?php

namespace RalphJSmit\Filament\Components\Forms;

class Timestamps
{
    public static function new(): array
    {
        return [
            CreatedAt::new(),
            UpdatedAt::new(),
        ];
    }
}
