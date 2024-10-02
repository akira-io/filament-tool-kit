<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class BirthDateTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('birth_date')
            ->label(__('Birth Date'))
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('success');
    }
}
