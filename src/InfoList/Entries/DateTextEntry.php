<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class DateTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('date')
            ->label(__('Date'))
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('success');
    }
}
