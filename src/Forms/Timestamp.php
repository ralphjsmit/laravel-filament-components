<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Placeholder;

class Timestamp
{
    public static function make(string $column, string $label = null): Placeholder
    {
        return Placeholder::make($column)
            ->label($label ?? tr("time.$column"))
            ->content(fn ($record): string => $record?->$column ? $record->$column->diffForHumans() : '-');
    }
}
