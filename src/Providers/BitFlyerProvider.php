<?php

namespace jtlimson\BitFlyer\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class BitFlyerProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../Configs/bitflyer.php', 'bitflyer'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
