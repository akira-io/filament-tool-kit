<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\IconEntry;

final class IsOpenSourceIconEntry
{
    public static function make(): IconEntry
    {
        return IconEntry::make('is_open_source')
            ->label(__('Is Open Source'))
            ->boolean();
    }
}
