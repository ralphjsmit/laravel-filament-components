<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Infolists\Components\TextEntry;

class UpdatedAt
{
    public static function make(?string $label = null): TextEntry
    {
        return Timestamp::make('updated_at', $label);
    }
}
