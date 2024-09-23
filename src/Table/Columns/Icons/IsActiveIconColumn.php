<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Icons;

use Filament\Tables\Columns\IconColumn;

final class IsActiveIconColumn
{
    public static function make(): IconColumn
    {
        return IconColumn::make('is_active')
            ->label(__('Is Active'))
            ->boolean();
    }
}
