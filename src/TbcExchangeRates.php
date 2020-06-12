<?php

namespace ArDigital\TbcExchangeRates;

use Illuminate\Support\Facades\Http;
use Exception;

class TbcExchangeRates
{
    
    const apiUrl = "https://api.tbcbank.ge";

    public static function ResultLis($currency = '')
    {
        $response = Http::withOptions([
            'verify' => config('tbcexchange.verify')
        ])->withHeaders([
            'ApiKey' => config('tbcexchange.api_key')
        ])->get(self::apiUrl.'/v1/exchange-rates/commercial', ['currency' => (string) $currency]);
        if ($response->ok()) {
            return $response->json();
        } else {
            throw new Exception($response->json()['systemMessage']);
        }
    }

    public static function Convert($amount, $from,$to){
        $response = Http::withOptions([
            'verify' => config('tbcexchange.verify')
        ])->withHeaders([
            'ApiKey' => config('tbcexchange.api_key')
        ])->get(self::apiUrl.'/v1/exchange-rates/commercial/convert', ['amount' =>  $amount, 'from' => $from, 'to' => $to]);
        return $response->json();
    }

}
