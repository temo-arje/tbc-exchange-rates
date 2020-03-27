<?php

namespace ArDigital\TbcExchangeRates;

use Illuminate\Support\Facades\Http;
use Exception;

class TbcExchangeRates
{
    public static function ResultLis($currency = '')
    {
        $response = Http::withOptions([
            'verify' => config('tbcexchange.verify')
        ])->withHeaders([
            'ApiKey' => config('tbcexchange.api_key')
        ])->get('https://test-api.tbcbank.ge/v1/exchange-rates/commercial', ['currency' => (string) $currency]);
        if ($response->ok()) {
            return $response->json();
        } else {
            throw new Exception($response->json()['systemMessage']);
        }
    }

}
