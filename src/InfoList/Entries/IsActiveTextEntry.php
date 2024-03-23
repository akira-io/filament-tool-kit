<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\IconEntry;

class IsActiveTextEntry
{
    public static function make(): IconEntry
    {
        return IconEntry::make('is_active')
            ->label(__('Is active'))
            ->boolean();
    }
}
