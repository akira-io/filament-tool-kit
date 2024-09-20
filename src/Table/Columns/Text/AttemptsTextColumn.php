<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class AttemptsTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('attempts')
            ->label(__('Attempts'))
            ->numeric()
            ->sortable();
    }
}
