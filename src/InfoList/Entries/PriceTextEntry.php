<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class PriceTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('price')
            ->label(__('Price'))
            ->color('success')
            ->badge();
    }
}
