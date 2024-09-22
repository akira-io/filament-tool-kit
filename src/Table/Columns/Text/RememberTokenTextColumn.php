<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class RememberTokenTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('remember_token')
            ->label(__('Remember Token'));
    }
}
