<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class EmailVerifiedAtTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('email_verified_at')
            ->label(__('E-mail verified at'))
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('success');
    }
}
