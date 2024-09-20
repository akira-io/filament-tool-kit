<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Uploads;

use Filament\Forms\Components\FileUpload;

final class CompanyFavIconFileUpload
{
    public static function make(): FileUpload
    {
        return FileUpload::make('company_fav_icon')
            ->image()
            ->label(__('Company fav icon'));
    }
}
