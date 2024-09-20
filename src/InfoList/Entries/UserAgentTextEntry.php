<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class UserAgentTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('user_agent')
            ->label(__('User agent'));
    }
}
