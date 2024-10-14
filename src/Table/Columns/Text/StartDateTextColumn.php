<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class StartDateTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('start_date')
            ->date(config('tool-kit.date_format'))
            ->label(__('Start Date'));
    }
}
