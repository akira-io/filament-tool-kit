<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class TwitterUrlTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('twitter_url')
            ->label(__('Twitter Url'))
            ->copyable()
            ->badge();
    }
}
