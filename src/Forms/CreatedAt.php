<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Placeholder;

class CreatedAt
{
    public static function make(string $label = null): Placeholder
    {
        return Timestamp::make('created_at', $label);
    }
}
