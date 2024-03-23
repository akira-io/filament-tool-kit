<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

class AuthenticatableNameTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('authenticatable.name')
            ->label(__('Name'))
            ->sortable()
            ->searchable();
    }
}
