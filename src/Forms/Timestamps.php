<?php

namespace RalphJSmit\Filament\Components\Forms;

class Timestamps
{
    public static function make(): array
    {
        return [
            CreatedAt::make(),
            UpdatedAt::make(),
        ];
    }
}
