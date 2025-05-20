<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class ContentTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('content')
            ->label(__('Content'))
            ->badge();
    }
}
