<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

class UpdatedAtTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('updated_at')
            ->label(__('Updated at'))
            ->toggleable(isToggledHiddenByDefault: true)
            ->date(config('project.date_format'))
            ->badge()
            ->color('info')
            ->sortable();
    }
}
