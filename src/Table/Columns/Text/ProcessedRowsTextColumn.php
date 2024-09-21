<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class ProcessedRowsTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('processed_rows')
            ->numeric()
            ->sortable()
            ->label(__('Processed Rows'));
    }
}
