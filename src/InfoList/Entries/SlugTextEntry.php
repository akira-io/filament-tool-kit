<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class SlugTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('slug')
            ->label(__('Slug'))
            ->badge();
    }
}
