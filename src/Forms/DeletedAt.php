<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Placeholder;

class DeletedAt
{
    public static function make(?string $label = null): Placeholder
    {
        return Timestamp::make('deleted_at', $label);
    }
}
