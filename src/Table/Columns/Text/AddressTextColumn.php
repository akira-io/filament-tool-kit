<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class AddressTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('address')
            ->searchable()
            ->label(__('Address'));
    }
}
