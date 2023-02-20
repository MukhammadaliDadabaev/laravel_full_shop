<?php

namespace App\Services;

use App\Models\Currency;

class CurrencyConversion
{
  protected static $container;

  public static function loadContainer()
  {
    if (is_null(self::$container)) {
      $currencies = Currency::get();
      foreach ($currencies as $currency) {
        self::$container[$currency->code] = $currency;
      }
    }
  }

  public static function getCurrencies()
  {
    // self::loadContainer();

    return self::$container;
  }

  public static function convert($sum, $originCurrencyCode = 'UZB', $targetCurrencyCode = null)
  {
    self::loadContainer();

    $originCurrency = self::$container[$originCurrencyCode];
    if (is_null($targetCurrencyCode)) {
      $targetCurrencyCode = session('currency', 'UZB');
    }
    $targetCurrency = self::$container[$targetCurrencyCode];

    return $sum * $originCurrency->rate / $targetCurrency->rate;
  }

  public static function getCurrencySymbol()
  {
    self::loadContainer();

    $currencyFromSession = session('currency', 'UZB');
    $currency = self::$container[$currencyFromSession];

    return $currency->symbol;
  }
}
