<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class YoutubeUrlTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('youtube_url')
            ->label(__('Youtube Url'))
            ->copyable()
            ->badge();
    }
}
