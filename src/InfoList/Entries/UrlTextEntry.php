<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class UrlTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('url')
            ->label(__('Url'))
            ->badge();
    }
}
