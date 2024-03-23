<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

class StatusTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('status')
            ->label(__('Status'))
            ->searchable();
    }
}
