<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\IconEntry;

class LoginSuccessFullTextEntry
{
    public static function make(): IconEntry
    {
        return IconEntry::make('login_successful')
            ->boolean()
            ->label(__('Login successful'));
    }
}
