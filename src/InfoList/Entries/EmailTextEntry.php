<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class EmailTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('email')
            ->label(__('E-mail'))
            ->badge();
    }
}
