<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class LogOutTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('logout_at')
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('info')
            ->label(__('Logout at'));
    }
}
