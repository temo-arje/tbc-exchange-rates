<?php

namespace ArDigital\TbcExchangeRates;
use Illuminate\Support\ServiceProvider;

class TbcExchangeRatesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/tbcexchange.php' => config_path('tbcexchange.php'),
        ], 'config');
    }

    public function register()
    {
        //
    }
}
