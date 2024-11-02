<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class ExtraAmountTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('extra_amount')
            ->label(__('Extra Amount'))
            ->badge();
    }
}
