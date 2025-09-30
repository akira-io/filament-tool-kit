<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class LocationTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('location')
            ->label(__('Location'))
            ->badge();
    }
}
