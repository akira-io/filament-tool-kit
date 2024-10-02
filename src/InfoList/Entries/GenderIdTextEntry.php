<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class GenderIdTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('gender_id')
            ->label(__('Gender'))
            ->badge();
    }
}
