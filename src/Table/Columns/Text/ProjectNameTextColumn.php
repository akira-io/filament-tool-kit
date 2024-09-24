<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class ProjectNameTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('project.name')
            ->label(__('Project Name'));
    }
}
