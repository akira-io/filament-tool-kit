<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class FailedAtTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('failed_at')
            ->label(__('Failed at'))
            ->badge()
            ->color('danger')
            ->dateTime(config('tool-kit.datetime_format'))
            ->sortable();
    }
}
