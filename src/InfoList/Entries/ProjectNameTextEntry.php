<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class ProjectNameTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('project.name')
            ->label(__('Project Name'))
            ->badge();
    }
}
