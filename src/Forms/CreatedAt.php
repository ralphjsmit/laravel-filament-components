<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Infolists\Components\TextEntry;

class CreatedAt
{
    public static function make(?string $label = null): TextEntry
    {
        return Timestamp::make('created_at', $label);
    }
}
