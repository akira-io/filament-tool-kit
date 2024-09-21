<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class AmountTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('amount')
            ->label(__('Amount'))
            ->color('success')
            ->badge();
    }
}
