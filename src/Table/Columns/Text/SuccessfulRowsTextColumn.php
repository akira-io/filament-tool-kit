<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class SuccessfulRowsTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('successful_rows')
            ->numeric()
            ->sortable()
            ->label(__('Successful Rows'));
    }
}
