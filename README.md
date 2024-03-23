# Filament Tool Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/akira/filament-tool-kit.svg?style=flat-square)](https://packagist.org/packages/akira/filament-tool-kit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/akira/filament-tool-kit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/akira/filament-tool-kit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/akira/filament-tool-kit/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/akira/filament-tool-kit/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/akira/filament-tool-kit.svg?style=flat-square)](https://packagist.org/packages/akira/filament-tool-kit)



A powerhouse of tools designed to turbocharge our data management and visualization game. From seamless organization to jaw-dropping visuals, Filament Toolkit is about  how we interact with data on Filament.

## Installation

You can install the package via composer:

```bash
composer require akira/filament-tool-kit
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-tool-kit-config"
```


This is the contents of the published config file:

```php
return [
    'date_format' => 'd-m-Y',
    'time_format' => 'H:i:s',
    'date_time_format' => 'd-m-Y H:i:s',
    'date_time_format_without_seconds' => 'd-m-Y H:i',
];
```

## Usage

```php
IdInput::make() // for input form
IdColumn::make() // for table column
IdEntry::make() // for infolist entry
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [kid](https://github.com/kidiatoliny)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
