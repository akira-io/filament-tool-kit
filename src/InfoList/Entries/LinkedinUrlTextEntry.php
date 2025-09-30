<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class LinkedinUrlTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('linkedin_url')
            ->label(__('Linkedin Url'))
            ->copyable()
            ->badge();
    }
}
