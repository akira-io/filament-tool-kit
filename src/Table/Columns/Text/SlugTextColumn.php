<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class SlugTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('slug')
            ->label(__('Slug'));
    }
}
