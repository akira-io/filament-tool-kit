<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class EndDateTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('end_date')
            ->label(__('End Date'))
            ->date(config('tool-kit.date_format'))
            ->badge();
    }
}
