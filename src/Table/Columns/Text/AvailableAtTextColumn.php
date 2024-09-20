<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class AvailableAtTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('available_at')
            ->label(__('Available at'))
            ->date(config('tool-kit.date_format'))
            ->sortable();
    }
}
