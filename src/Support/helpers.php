<?php

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

/**
 * @deprecated This function will be removed in V2. Please upgrade.
 */
function tr(string $key): Stringable
{
    return Str::of(trans("filament-components::translations.{$key}"));
}
