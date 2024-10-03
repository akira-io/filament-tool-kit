<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class IpAddressTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('ip_address')
            ->label(__('IP address'))
            ->copyable();
    }
}
