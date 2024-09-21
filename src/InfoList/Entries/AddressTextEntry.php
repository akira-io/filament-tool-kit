<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class AddressTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('address')
            ->label(__('Address'))
            ->badge();
    }
}
