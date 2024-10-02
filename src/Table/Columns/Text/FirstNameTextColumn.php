<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class FirstNameTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('first_name')
            ->label(__('First Name'))
            ->searchable()
            ->sortable();
    }
}
