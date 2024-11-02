<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Uploads;

use Filament\Forms\Components\FileUpload;

final class BannerFileUpload
{
    public static function make(): FileUpload
    {
        return FileUpload::make('banner')
            ->image()
            ->label(__('Banner'));
    }
}
