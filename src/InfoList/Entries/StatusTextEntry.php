<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class StatusTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('status')
            ->label(__('Status'));
    }
}
