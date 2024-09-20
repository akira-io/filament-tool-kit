<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class NameTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('name')
            ->label(__('Name'));
    }
}
