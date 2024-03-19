<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Placeholder;

class UpdatedAt
{
    public static function make(?string $label = null): Placeholder
    {
        return Timestamp::make('updated_at', $label);
    }
}
