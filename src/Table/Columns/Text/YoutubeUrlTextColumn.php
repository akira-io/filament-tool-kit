<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class YoutubeUrlTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('youtube_url')
            ->label(__('Youtube Url'));
    }
}
