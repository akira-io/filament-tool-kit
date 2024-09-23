<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Toggles;

use Filament\Tables\Columns\ToggleColumn;

final class IsOpenSourceToggleColumn
{
    public static function make(): ToggleColumn
    {
        return ToggleColumn::make('is_open_source')
            ->label(__('Is Open Source'));
    }
}
