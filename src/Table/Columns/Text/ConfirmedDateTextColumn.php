<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class ConfirmedDateTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('confirmed_date')
            ->date(config('tool-kit.date_format'))
            ->label(__('Confirmed Date'));
    }
}
