<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class ProcessedRowsTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('processed_rows')
            ->label(__('Processed Rows'))
            ->badge();
    }
}
