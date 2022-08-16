# Laravel Tbc Exchange Rates

This package allows you   Exchange Rates  with TbcBank   API


## Table of Contents

- [Installation](#installation)
- [Usage](#usage)

## Installation

```
composer require ardigital/tbc-exchange-rates
```

#### For Laravel >= 7.0

Open `config/app.php` and add `TbcExchangeRatesServiceProvider` to the `providers` array.

```php
'providers' => [
   ArDigital\TbcExchangeRates\TbcExchangeRatesServiceProvider::class,
],
```

Then run:

```
php artisan vendor:publish --provider="ArDigital\TbcExchangeRates\TbcExchangeRatesServiceProvider"
```

Place your api key  `config/tbcexchange.php` file Or .env : 
 
```
 
TBC_EXCHANGE_RATES_KEY="Your Api Key"

TBC_GUZZLE_VERIFY=false
```

 
## Usage

###  Exchange rates Class

In `TbcExchangeRates` class, add `ResultLis()` method and return currency

```php
use ArDigital\TbcExchangeRates\TbcExchangeRates;

public function getCurrency(){
 TbcExchangeRates::get(); // Return All currency
 TbcExchangeRates::get('USD'); // Return Usd currency USD buy and sell
}
OR:
public function Convert(){
 TbcExchangeRates::Convert(100, 'USD', 'GEL'); 
}
 
