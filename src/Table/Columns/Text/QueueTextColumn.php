<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class QueueTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('queue')
            ->label(__('Queue'))
            ->badge()
            ->searchable();
    }
}
