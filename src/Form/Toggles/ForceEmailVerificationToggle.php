<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Toggles;

use Filament\Forms\Components\Toggle;

final class ForceEmailVerificationToggle
{
    public static function make(): Toggle
    {
        return Toggle::make('force_email_verification')
            ->label(__('Force email verification'))
            ->helperText(__('Require users to verify their email address before they can log in.'));
    }
}
