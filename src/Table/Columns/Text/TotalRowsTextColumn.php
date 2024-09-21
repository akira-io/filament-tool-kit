<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class TotalRowsTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('total_rows')
            ->numeric()
            ->sortable()
            ->label(__('Total Rows'));
    }
}
