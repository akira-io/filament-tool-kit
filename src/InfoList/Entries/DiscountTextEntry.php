<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class DiscountTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('discount')
            ->label(__('Discount'))
            ->color('warning')
            ->badge();
    }
}
