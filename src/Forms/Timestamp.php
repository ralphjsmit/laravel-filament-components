<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Forms\Components\Placeholder;

class Timestamp
{
    public static function make(string $column, string $label = null): Placeholder
    {
        return Placeholder::make($column)
            ->label(function () use ($column, $label) {
                if ($label) {
                    return $label;
                }

                return match ( $column ) {
                    'created_at' => tr('time.created_at'),
                    'updated_at' => tr('time.updated_at'),
                    'deleted_at' => tr('time.deleted_at'),
                    default => null,
                };
            })
            ->content(fn ($record): string => $record?->$column ? $record->$column->diffForHumans() : '-');
    }
}
