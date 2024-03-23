<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

class QueueTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('queue')
            ->label(__('Queue'));
    }
}
