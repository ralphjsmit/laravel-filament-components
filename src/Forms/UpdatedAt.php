<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Placeholder;

class UpdatedAt
{
    public static function new(): Placeholder
    {
        return Placeholder::make('updated_at')
            ->label(tr('time.updated_at'))
            ->content(fn ($record): string => $record->updated_at ? $record->updated_at->diffForHumans() : '-');
    }
}
