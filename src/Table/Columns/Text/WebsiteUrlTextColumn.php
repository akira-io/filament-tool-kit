<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class WebsiteUrlTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('website_url')
            ->label(__('Website Url'));
    }
}
