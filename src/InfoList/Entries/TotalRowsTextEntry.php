<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class TotalRowsTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('total_rows')
            ->label(__('Total Rows'))
            ->badge();
    }
}
