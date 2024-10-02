<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class Iso2TextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('iso2')
            ->label(__('Iso2'))
            ->badge();
    }
}
