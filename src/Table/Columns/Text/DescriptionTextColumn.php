<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class DescriptionTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('description')
            ->label(__('Description'))
            ->visibleFrom('md')
            ->html()
            ->limit();
    }
}
