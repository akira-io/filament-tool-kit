<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class LoginAtTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('login_at')
            ->label(__('Login at'))
            ->date(config('tool-kit.date_format'))
            ->sortable();
    }
}
