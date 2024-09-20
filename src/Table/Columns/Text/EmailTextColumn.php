<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class EmailTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('email')
            ->label(__('E-mail'))
            ->sortable()
            ->searchable()
            ->badge();
    }
}
