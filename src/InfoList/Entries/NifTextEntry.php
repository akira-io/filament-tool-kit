<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class NifTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('nif')
            ->copyable()
            ->label(__('Nif'))
            ->badge();
    }
}
