# Bigkinds Php Client

[![code-style](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/code-style.yml/badge.svg)](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/code-style.yml)
[![run-tests](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/run-tests.yml/badge.svg)](https://github.com/cable8mm/bigkinds-php-client/actions/workflows/run-tests.yml)
![Packagist Version](https://img.shields.io/packagist/v/cable8mm/bigkinds-php-client)
![Packagist Downloads](https://img.shields.io/packagist/dt/cable8mm/bigkinds-php-client)
![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/cable8mm/bigkinds-php-client/php)
![Packagist Stars](https://img.shields.io/packagist/stars/cable8mm/bigkinds-php-client)
![Packagist License](https://img.shields.io/packagist/l/cable8mm/bigkinds-php-client)

The Bigkinds PHP Client is a lightweight library for PHP. Using bigkinds-php-client makes code beautiful, elegant, and simple. It works with a Bigkinds Access Key, although this is optional.

We have provided the API Documentation on the web. For more information, please visit https://www.palgle.com/bigkinds-php-client/ ❤️

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

```bash
composer lint
# Modify all files to comply with the PSR-12.

composer inspect
# Inspect all files to ensure compliance with PSR-12.
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
