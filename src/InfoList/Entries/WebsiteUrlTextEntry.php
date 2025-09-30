<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class WebsiteUrlTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('website_url')
            ->label(__('Website Url'))
            ->badge();
    }
}
