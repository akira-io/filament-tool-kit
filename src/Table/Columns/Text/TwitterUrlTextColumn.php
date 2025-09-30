<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class TwitterUrlTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('twitter_url')
            ->label(__('Twitter Url'));
    }
}
