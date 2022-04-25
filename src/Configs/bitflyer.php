<?php 

namespace jtlimson\BitFlyer\Configs;

return [
        "label" => env('BITFLYER_LABEL', 'label'),
        "api_key" => env('BITFLYER_API_KEY', null),
        "api_secret" => env('BITFLYER_API_SECRET', null),
    ];