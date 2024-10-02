<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class FirstNameTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('first_name')
            ->label(__('First Name'))
            ->badge();
    }
}
