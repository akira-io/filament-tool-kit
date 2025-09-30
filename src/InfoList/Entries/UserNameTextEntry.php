<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class UserNameTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('user_name')
            ->label(__('User Name'))
            ->badge();
    }
}
