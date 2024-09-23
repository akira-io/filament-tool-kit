<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class DeletedAtTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('deleted_at')
            ->label(__('Deleted At'))
            ->toggleable(isToggledHiddenByDefault: true)
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('danger')
            ->sortable();
    }
}
