# This is my package filament-tool-kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/akira/filament-tool-kit.svg?style=flat-square)](https://packagist.org/packages/akira/filament-tool-kit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/akira/filament-tool-kit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/akira/filament-tool-kit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/akira/filament-tool-kit/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/akira/filament-tool-kit/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/akira/filament-tool-kit.svg?style=flat-square)](https://packagist.org/packages/akira/filament-tool-kit)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require akira/filament-tool-kit
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-tool-kit-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-tool-kit-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-tool-kit-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentToolKit = new Akira\FilamentToolKit();
echo $filamentToolKit->echoPhrase('Hello, Akira!');
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
