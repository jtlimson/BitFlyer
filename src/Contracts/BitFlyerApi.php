<?php

namespace jtlimson\BitFlyer\Contracts;

/**
 * PhitFlyer API public consts class
 */
interface BitFlyerApi
{
    public const POST = 'POST';

    public const GET = 'GET';

    public const ENDPOINT      = 'https://api.bitflyer.com';
    
    
    // BitFlyer public API
    public const MARKETS       = '/v1/markets';
    public const BOARD         = '/v1/board';
    public const TICKER        = '/v1/ticker';
    public const EXECUTIONS    = '/v1/executions';
    public const GETBOARDSTATE = '/v1/getboardstate';
    public const GETHEALTH     = '/v1/gethealth';
    public const GETCHATS      = '/v1/getchats';
    
    // BitFlyer private API
    public const ME_GETPERMISSIONS           = '/v1/me/getpermissions';
    public const ME_GETBALANCE               = '/v1/me/getbalance';
    public const ME_GETCOLLATERAL            = '/v1/me/getcollateral';
    public const ME_GETCOLLATERALACCOUNTS    = '/v1/me/getcollateralaccounts';
    public const ME_GETADDRESS               = '/v1/me/getaddresses';
    public const ME_GETCOININS               = '/v1/me/getcoinins';
    public const ME_GETCOINOUTS              = '/v1/me/getcoinouts';
    public const ME_GETBANKACCOUNTS          = '/v1/me/getbankaccounts';
    public const ME_GETDEPOSITS              = '/v1/me/getdeposits';
    //public const ME_WITHDRAW                 = '/v1/me/withdraw';                      ...removed at ver.0.2.0
    //public const ME_GETWITHDRAWALS           = '/v1/me/getwithdrawals';                ...removed at ver.0.2.0
    public const ME_SENDCHILDORDER           = '/v1/me/sendchildorder';
    public const ME_CANCELCHILDORDER         = '/v1/me/cancelchildorder';
    public const ME_CANCELALLCHILDORDERS     = '/v1/me/cancelallchildorders';
    public const ME_GETCHILDORDERS           = '/v1/me/getchildorders';
    public const ME_GETEXECUTIONS            = '/v1/me/getexecutions';
    public const ME_GETPOSITIONS             = '/v1/me/getpositions';
    public const ME_GETTRADINGCOMMISSION     = '/v1/me/gettradingcommission';
    
}