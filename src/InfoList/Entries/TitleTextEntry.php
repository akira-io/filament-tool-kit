<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class TitleTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('title')
            ->label(__('Title'))
            ->badge();
    }
}
