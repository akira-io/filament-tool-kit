<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\RichEditors;

use Filament\Forms\Components\RichEditor;use Filament\Forms\Components\Toggle;

final class DescriptionRichEditor
{
    public static function make(): RichEditor
    {
        return RichEditor::make('description')
            ->label(__('Description'));
    }
   
}
