<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class SummaryTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('summary')
            ->label(__('Summary'))
            ->badge();
    }
}
