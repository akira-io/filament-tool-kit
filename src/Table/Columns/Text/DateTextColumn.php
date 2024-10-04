<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class DateTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('date')
            ->label(__('Date'))
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('success')
            ->sortable();
    }
}
