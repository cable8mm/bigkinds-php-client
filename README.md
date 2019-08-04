# Bigkinds Php Client #

[![Build Status](https://travis-ci.org/cable8mm/bigkinds-php-client.svg?branch=master)](https://travis-ci.org/cable8mm/bigkinds-php-client)
[![GitHub license](https://img.shields.io/github/license/cable8mm/bigkinds-php-client)](https://github.com/cable8mm/bigkinds-php-client/blob/master/LICENSE)
[![Coding Standards](https://img.shields.io/badge/cs-PSR--2--R-yellow.svg)](https://github.com/php-fig-rectified/fig-rectified-standards)

## Requirement ##

* PHP 5.5 above
* (optional) Bigkinds Access Key

## About ##

bigkinds-php-client is very small-size library for PHP.

bigkinds-php-client make code a beatiful, elegant and simple.

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

If you want to know more information about Bigkinds, click <https://www.bigkinds.or.kr/>

## Installation ##

I am preparing for easy installation for your convenience. When it is ready, we will let you know how to about it.
composer will be used.

## More Informations ##

* bigkinds-php-client *almost* follow the PSR standard.
* bigkinds-php-client is based on my another toy project - <https://github.com/cable8mm/phpunit-start-kit>
