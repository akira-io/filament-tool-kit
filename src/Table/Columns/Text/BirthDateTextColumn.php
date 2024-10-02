<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class BirthDateTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('birth_date')
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('success')
            ->label(__('Birth Date'));
    }
}
