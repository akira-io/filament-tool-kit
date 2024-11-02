<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class PhotoNumberTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('photo_number')
            ->label(__('Photo Number'))
            ->badge();
    }
}
