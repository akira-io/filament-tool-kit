<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class GithubUrlTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('github_url')
            ->label(__('Github Url'))
            ->copyable()
            ->badge();
    }
}
