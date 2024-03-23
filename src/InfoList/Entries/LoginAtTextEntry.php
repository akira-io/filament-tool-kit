<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

class LoginAtTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('login_at')
            ->label(__('Login at'))
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('success');
    }
}
