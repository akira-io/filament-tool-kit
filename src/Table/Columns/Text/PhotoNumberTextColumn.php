<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class PhotoNumberTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('photo_number')
            ->label(__('Photo Number'));
    }
}
