<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Icons;

use Filament\Tables\Columns\IconColumn;

final class IsOpenSourceIconColumn
{
    public static function make(): IconColumn
    {
        return IconColumn::make('is_open_source')
            ->label(__('Is Open Source'))
            ->boolean();
    }
}
