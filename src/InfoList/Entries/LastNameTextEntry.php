<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class LastNameTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('last_name')
            ->label(__('Last Name'))
            ->badge();
    }
}
