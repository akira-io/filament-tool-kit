<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class ExtraAmountTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('extra_amount')
            ->label(__('Extra Amount'));
    }
}
