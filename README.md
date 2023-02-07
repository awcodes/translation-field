# Translation Field for Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/awcodes/translation-field.svg?style=flat-square)](https://packagist.org/packages/awcodes/translation-field)
[![Total Downloads](https://img.shields.io/packagist/dt/awcodes/translation-field.svg?style=flat-square)](https://packagist.org/packages/awcodes/translation-field)

A form component for Filament to handle translations at the field / input level.

## Installation

You can install the package via composer:

```bash
composer require awcodes/translation-field
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="translation-field-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="translation-field-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
use \Awcodes\TranslationField\TranslationField;

TranslationField::make('message')
    ->languages([
        'en' => 'English',
        'es' => 'Spanish'
    ])
    ->schema([
        Forms\Components\TextInput::make('title')
            ->label('Title')
            ->required(),
    ])
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

- [awcodes](https://github.com/awcodes)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
