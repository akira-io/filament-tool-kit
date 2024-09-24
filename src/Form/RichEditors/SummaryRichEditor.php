<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\RichEditors;

use Filament\Forms\Components\RichEditor;

final class SummaryRichEditor
{
    public static function make(): RichEditor
    {
        return RichEditor::make('summary')
            ->label(__('Summary'));
    }
}
