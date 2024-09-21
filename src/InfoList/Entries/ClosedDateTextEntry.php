<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class ClosedDateTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('closed_date')
            ->badge()
            ->color('success')
            ->label(__('Closed Date'));
    }
}
