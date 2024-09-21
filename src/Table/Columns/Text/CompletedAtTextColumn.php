<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class CompletedAtTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('completed_at')
            ->sortable()
            ->dateTime(config('tool-kit.date_format'))
            ->label(__('Completed At'));
    }
}
