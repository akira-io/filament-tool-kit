<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class OccupationTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('occupation')
            ->label(__('Occupation'))
            ->badge();
    }
}
