<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

class CodeTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('code')
            ->label(__('Code'));
    }
}
