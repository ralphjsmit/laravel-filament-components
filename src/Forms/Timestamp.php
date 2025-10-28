<?php

namespace RalphJSmit\Filament\Components\Forms;

use Filament\Infolists\Components\TextEntry;

class Timestamp
{
    public static function make(string $column, ?string $label = null): TextEntry
    {
        return TextEntry::make($column)
            ->label(function () use ($column, $label): ?string {
                if ($label) {
                    return $label;
                }

                return match ($column) {
                    'created_at' => tr('time.created_at'),
                    'updated_at' => tr('time.updated_at'),
                    'deleted_at' => tr('time.deleted_at'),
                    default => null,
                };
            })
            ->content(fn ($record): string => $record?->$column ? $record->$column->diffForHumans() : '-');
    }
}
