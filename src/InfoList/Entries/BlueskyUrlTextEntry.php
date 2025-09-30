<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class BlueskyUrlTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('bluesky_url')
            ->label(__('Bluesky Url'))
            ->badge();
    }
}
