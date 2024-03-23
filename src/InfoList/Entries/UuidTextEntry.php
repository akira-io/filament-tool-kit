<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

class UuidTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('uuid')
            ->columnSpanFull();
    }
}
