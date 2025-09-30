<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class GithubRefreshTokenTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('github_refresh_token')
            ->label(__('Github Refresh Token'))
            ->badge();
    }
}
