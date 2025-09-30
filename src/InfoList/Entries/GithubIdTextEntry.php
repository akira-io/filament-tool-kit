<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class GithubIdTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('github_id')
            ->label(__('Github'))
            ->badge();
    }
}
