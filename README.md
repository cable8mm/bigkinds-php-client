# Bigkinds Php Client

[![PHP Linting (Pint)](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/coding-style-php.yml/badge.svg)](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/coding-style-php.yml)
[![Tests](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/tests.yml/badge.svg)](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/tests.yml)
[![update changelog](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/update-changelog.yml/badge.svg)](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/update-changelog.yml)
![GitHub Release](https://img.shields.io/github/v/release/cable8mm/bigkinds-php-client?logo=packagist&color=F28D1A)
![Packagist Downloads](https://img.shields.io/packagist/dt/cable8mm/bigkinds-php-client?logo=packagist&color=F28D1A)
![minimum PHP version](https://img.shields.io/badge/php-%3E%3D_8.0-8892BF.svg?logo=php)
![GitHub License](https://img.shields.io/github/license/cable8mm/bigkinds-php-client)

The Bigkinds PHP Client is a lightweight library for PHP. Using bigkinds-php-client makes code beautiful, elegant, and simple. It works with a Bigkinds Access Key, although this is optional.

## Install

```sh
composer require cable8mm/bigkinds-php-client
```

## Usage

```php
use Cable8mm\BigkindsPhpClient\Bigkinds;

$Bigkinds = new Bigkinds();
$news = $Bigkinds->request('news');
```

or

```php
use Cable8mm\BigkindsPhpClient\Big;

$news = \Big::kinds('news') // facade class
```

If you want to learn more about Bigkinds, visit https://www.bigkinds.or.kr/.

## Formatting

```sh
composer lint
```

## Test

```sh
composer test
```

## More Informations

- The bigkinds-php-client follows the PSR standard.
- The bigkinds-php-client is based on my another toy project - https://github.com/cable8mm/phpunit-start-kit

## License

The Bigkinds PHP Client is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
