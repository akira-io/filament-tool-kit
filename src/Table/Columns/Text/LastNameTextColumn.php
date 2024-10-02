<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class LastNameTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('last_name')
            ->label(__('Last Name'))
            ->searchable()
            ->sortable();
    }
}
