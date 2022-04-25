bitFlyer API PHP client
=======================

## Description

PHP library which provides calling bitFLyer-API.

## Feature

- simple interface
- return values are result of json decoding(array/object)

## Usage

1. create PhitFlyerClient object.
2. call API method.
3. PhitFlyer returns array or object(stdClass).

## Requirement

PHP 5.5 or later
php-mbstring
php-xml

## Installing jtlimson/BitFlyer

The recommended way to install jtlimson/BitFlyer is through
[Composer](http://getcomposer.org).

```bash
composer require jtlimson/bitflyer
```
add environment setting `.env`
```
BITFLYER_LABEL=Assets_API_Key_Auth
BITFLYER_API_KEY=
BITFLYER_API_SECRET=
```
After installing, you need to add provider in `config\app.php
```php
'providers' => [
  ... some other providers ...
  jtlimson\BitFlyer\Providers\BitFlyerProvider::class,
],
```


## Demo

### simple and fastest sample:
```php
use jtlimson\BitFlyer\BitFlyerApiClient;

$client = new BitFlyerApiClient();
 
$markets = $client->getMarkets();
 
```

## Author

[jtlimson](https://github.com/jtlimson)

## Disclaimer

This software is no warranty.

We are not responsible for any results caused by the use of this software.

Please use the responsibility of the your self.

