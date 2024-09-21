<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class DiscountTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('discount')
            ->label(__('Discount'));
    }
}
