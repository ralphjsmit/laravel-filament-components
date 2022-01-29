<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Placeholder;

class CreatedAt
{
    public static function make(): Placeholder
    {
        return Placeholder::make('created_at')
            ->label(tr('time.created_at'))
            ->content(fn ($record): string => $record->created_at ? $record->created_at->diffForHumans() : '-');
    }
}
