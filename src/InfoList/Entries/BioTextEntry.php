<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class BioTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('bio')
            ->label(__('Bio'))
            ->badge();
    }
}
