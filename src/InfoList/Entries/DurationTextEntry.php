<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class DurationTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('duration')
            ->label(__('Duration'))
            ->badge();
    }
}
