# Laravel Package for Staff Management (ADP API)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tipoff/staff-management.svg?style=flat-square)](https://packagist.org/packages/tipoff/staff-management)
![Tests](https://github.com/tipoff/staff-management/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/tipoff/staff-management.svg?style=flat-square)](https://packagist.org/packages/tipoff/staff-management)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require tipoff/staff-management
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Tipoff\StaffManagement\StaffManagementServiceProvider" --tag="staff-management-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Tipoff\StaffManagement\StaffManagementServiceProvider" --tag="staff-management-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$staff-management = new Tipoff\StaffManagement();
echo $staff-management->echoPhrase('Hello, Tipoff!');
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

- [Tipoff](https://github.com/tipoff)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
