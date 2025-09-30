<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class AvatarUrlTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('avatar_url')
            ->label(__('Avatar Url'));
    }
}
