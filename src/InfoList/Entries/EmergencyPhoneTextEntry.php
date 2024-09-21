<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class EmergencyPhoneTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('emergency_phone')
            ->label(__('Emergency Phone'))
            ->badge();
    }
}
