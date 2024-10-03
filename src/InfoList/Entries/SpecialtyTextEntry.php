<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class SpecialtyTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('specialty')
            ->label(__('Specialty'))
            ->badge();
    }
}
