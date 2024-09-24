<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class SummaryTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('summary')
            ->label(__('Summary'))
            ->visibleFrom('md')
            ->html()
            ->limit();
    }
}
