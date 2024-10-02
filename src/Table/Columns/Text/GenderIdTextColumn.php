<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class GenderIdTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('gender_id')
            ->label(__('Gender'));
    }
}
