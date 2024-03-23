<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Toggles;

use Filament\Forms\Components\Toggle;

class AllowVpnToggle
{
    public static function make(): Toggle
    {
        return Toggle::make('allow_vpn')
            ->label(__('Allow VPN'))
            ->helperText(__('Allow users to log in from a VPN.'));
    }
}
