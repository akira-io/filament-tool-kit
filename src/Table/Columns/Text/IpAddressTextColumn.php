<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

class IpAddressTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('ip_address')
            ->label(__('IP address'))
            ->searchable();
    }
}
