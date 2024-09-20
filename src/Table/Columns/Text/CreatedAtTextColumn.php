<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class CreatedAtTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('created_at')
            ->label(__('Created at'))
            ->toggleable(isToggledHiddenByDefault: true)
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('success')
            ->sortable();
    }
}
