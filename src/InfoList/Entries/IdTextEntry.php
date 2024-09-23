<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class IdTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('id')
            ->label(__('Id'))
            ->badge();
    }
}
