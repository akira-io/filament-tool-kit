<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

// Updated for TextEntry

final class ClosedDateTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('closed_date')
            ->date(config('tool-kit.date_format'))
            ->sortable()
            ->searchable()
            ->label(__('Closed Date'));
    }
}
