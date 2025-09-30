<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class GithubUserNameTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('github_user_name')
            ->label(__('Github User Name'))
            ->badge();
    }
}
