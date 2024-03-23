<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Icons;

use Filament\Tables\Columns\IconColumn;

class LoginSuccessFullIconColumn
{
    public static function make(): IconColumn
    {
        return IconColumn::make('login_successful')
            ->label(__('Login successful'))
            ->boolean();
    }
}
