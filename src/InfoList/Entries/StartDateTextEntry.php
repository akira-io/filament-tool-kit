<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class StartDateTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('start_date')
            ->label(__('Start Date'))
            ->date(config('tool-kit.date_format'))
            ->badge();
    }
}
