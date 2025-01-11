<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class DocumentTypeIdSelect
{
    public static function make(): Select
    {
        return Select::make('document_type_id')
            ->searchable()
            ->preload()
            ->label(__('Document Type'));
    }
}
