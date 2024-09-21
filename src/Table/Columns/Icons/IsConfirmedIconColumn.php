<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Icons;

use Filament\Tables\Columns\IconColumn;

final class IsConfirmedIconColumn
{
    public static function make(): IconColumn
    {
        return IconColumn::make('is_confirmed')
            ->label(__('Is Confirmed'))
            ->boolean();
    }
}
