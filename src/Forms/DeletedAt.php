<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Infolists\Components\TextEntry;

class DeletedAt
{
    public static function make(?string $label = null): TextEntry
    {
        return Timestamp::make('deleted_at', $label);
    }
}
