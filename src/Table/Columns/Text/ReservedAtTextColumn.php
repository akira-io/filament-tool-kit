<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class ReservedAtTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('reserved_at')
            ->label(__('Reserved at'))
            ->date(config('tool-kit.date_format'))
            ->sortable();
    }
}
