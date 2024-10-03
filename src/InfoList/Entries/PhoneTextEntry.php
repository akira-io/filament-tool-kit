<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class PhoneTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('phone')
            ->label(__('Phone'))
            ->copyable()
            ->badge();
    }
}
