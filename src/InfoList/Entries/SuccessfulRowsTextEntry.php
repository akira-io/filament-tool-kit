<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class SuccessfulRowsTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('successful_rows')
            ->label(__('Successful Rows'))
            ->badge();
    }
}
