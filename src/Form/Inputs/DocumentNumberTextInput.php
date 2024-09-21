<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class DocumentNumberTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('document_number')
            ->required()
            ->label(__('Document Number'));
    }
}
