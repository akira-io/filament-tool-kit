<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class UserNameTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('user_name')
            ->label(__('User Name'));
    }
}
