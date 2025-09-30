<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class AvatarUrlTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('avatar_url')
            ->label(__('Avatar Url'))
            ->badge();
    }
}
