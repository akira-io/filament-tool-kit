<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class PhoneTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('phone')
            ->label(__('Phone'))
            ->searchable();
    }
}
