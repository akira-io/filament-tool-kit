<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class PhoneNumberTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('phone_number')
            ->label(__('Phone Number'))
            ->searchable();
    }
}
