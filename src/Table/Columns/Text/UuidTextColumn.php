<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class UuidTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('uuid')
            ->label('UUID')
            ->searchable();
    }
}
