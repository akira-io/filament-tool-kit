<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Uploads;

use Filament\Forms\Components\FileUpload;

class CompanyLogoFileUpload
{
    public static function make(): FileUpload
    {
        return FileUpload::make('company_logo')
            ->image()
            ->label(__('Company logo'));
    }
}
