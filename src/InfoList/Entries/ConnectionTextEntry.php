<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class ConnectionTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('connection')
            ->badge()
            ->color('info')
            ->label(__('Connection'));
    }
}
