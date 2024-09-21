<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Icons;

use Filament\Tables\Columns\IconColumn;

final class IsOpenIconColumn
{
    public static function make(): IconColumn
    {
        return IconColumn::make('is_open')
            ->label(__('Is Open'))
            ->boolean();
    }
}
