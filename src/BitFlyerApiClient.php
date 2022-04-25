<?php

namespace jtlimson\BitFlyer;

use jtlimson\BitFlyer\Contracts\BitFlyerApi;
use jtlimson\BitFlyer\Services\ApiClient;
use Exception;

class BitFlyerApiClient extends ApiClient
{
    public function getMarkets()
    {
        // HTTP GET
        $json = $this->get(BitFlyerApi::MARKETS);
        // check return type
        if (!is_array($json)){
            throw new Exception();
        }
        return $json;
    }
    public function getBoard(string $product_code = 'BTC_JPY')
    {
        // HTTP GET
        $query_data = array(
            'product_code' => $product_code
        );
        $json = $this->get(BitFlyerApi::BOARD, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }

    public function getTicker(string $product_code = null)
    {
        // HTTP GET
        $query_data = array(
            'product_code' => $product_code
        );
        $json = $this->get(BitFlyerApi::TICKER, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [public] get executions
     *
     * @param string|null $product_code
     * @param int|null $before
     * @param int|null $after
     * @param int|null $count
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function getExecutions(string $product_code = null, int $before = null, int $after = null, int $count = null)
    {
        // HTTP GET
        $query_data = array(
            'product_code' => $product_code,
            'before' => $before,
            'after' => $after,
            'count' => $count,
        );
        $json = $this->get(BitFlyerApi::EXECUTIONS, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [public] get board state
     *
     * @param string|null $product_code
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function getBoardState(string $product_code = null)
    {
        // HTTP GET
        $query_data = array(
            'product_code' => $product_code,
        );
        $json = $this->get(BitFlyerApi::GETBOARDSTATE, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [public] get health
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function getHealth()
    {
        // HTTP GET
        $json = $this->get(BitFlyerApi::GETHEALTH);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [public] get chats
     *
     * @param string|null $from_date
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function getChats(string $from_date = null)
    {
        // HTTP GET
        $query_data = array(
            'from_date' => $from_date
        );
        $json = $this->get(BitFlyerApi::GETCHATS, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get permissions
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetPermissions()
    {
        // HTTP GET
        $json = $this->privateGet(BitFlyerApi::ME_GETPERMISSIONS);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get balance
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetBalance()
    {
        // HTTP GET
        $json = $this->privateGet(BitFlyerApi::ME_GETBALANCE);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get collateral
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetCollateral()
    {
        // HTTP GET
        $json = $this->privateGet(BitFlyerApi::ME_GETCOLLATERAL);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get collateral accounts
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetCollateralAccounts()
    {
        // HTTP GET
        $json = $this->privateGet(BitFlyerApi::ME_GETCOLLATERALACCOUNTS);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get address
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetAddress()
    {
        // HTTP GET
        $json = $this->privateGet(BitFlyerApi::ME_GETADDRESS);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get coin ins
     *
     * @param int|null $before
     * @param int|null $after
     * @param int|null $count
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetCoinIns(int $before = null, int $after = null, int $count = null)
    {
        // HTTP GET
        $query_data = array(
            'before' => $before,
            'after' => $after,
            'count' => $count,
        );
        $json = $this->privateGet(BitFlyerApi::ME_GETCOININS, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get coin outs
     *
     * @param int|null $before
     * @param int|null $after
     * @param int|null $count
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetCoinOuts(int $before = null, int $after = null, int $count = null)
    {
        // HTTP GET
        $query_data = array(
            'before' => $before,
            'after' => $after,
            'count' => $count,
        );
        $json = $this->privateGet(BitFlyerApi::ME_GETCOINOUTS,$query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get bank accounts
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetBankAccounts()
    {
        // HTTP GET
        $json = $this->privateGet(BitFlyerApi::ME_GETBANKACCOUNTS);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get deposits
     *
     * @param int|null $before
     * @param int|null $after
     * @param int|null $count
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetDeposits(int $before = null, int $after = null, int $count = null)
    {
        // HTTP GET
        $query_data = array(
            'before' => $before,
            'after' => $after,
            'count' => $count,
        );
        $json = $this->privateGet(BitFlyerApi::ME_GETDEPOSITS, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] send child order
     *
     * @param string $product_code
     * @param string $child_order_type
     * @param string $side
     * @param int $price
     * @param float $size
     * @param int|null $minute_to_expire
     * @param string|null $time_in_force
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meSendChildOrder(string $product_code, string $child_order_type, string $side, int $price, float $size,
                                     int $minute_to_expire = null, string $time_in_force = null)
    {
        // HTTP POST
        $post_data = array(
            'product_code' => $product_code,
            'child_order_type' => $child_order_type,
            'side' => $side,
            'price' => $price,
            'size' => $size,
            'minute_to_expire' => $minute_to_expire,
            'time_in_force' => $time_in_force,
        );
        $json = $this->privatePost(BitFlyerApi::ME_SENDCHILDORDER, $post_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] cancel child order
     *
     * @param string $product_code
     * @param string $child_order_id
     *
     * @throws Exception
     */
    public function meCancelChildOrder(string $product_code, string $child_order_id)
    {
        // HTTP POST
        $post_data = array(
            'product_code' => $product_code,
            'child_order_id' => $child_order_id,
        );
        $this->privatePost(BitFlyerApi::ME_CANCELCHILDORDER, $post_data);
    }
    
    /**
     * [private] cancel child order
     *
     * @param string $product_code
     *
     * @throws Exception
     */
    public function meCancelAllChildOrders(string $product_code)
    {
        // HTTP POST
        $post_data = array(
            'product_code' => $product_code,
        );
        $this->privatePost(BitFlyerApi::ME_CANCELALLCHILDORDERS, $post_data);
    }
    
    /**
     * [private] get child orders
     *
     * @param string $product_code
     * @param int|null $before
     * @param int|null $after
     * @param int|null $count
     * @param string|null $child_order_state
     * @param string|null $parent_order_id
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetChildOrders(string $product_code, int $before = null, int $after = null, int $count = null,
                                     string $child_order_state = null, string $parent_order_id = null)
    {
        // HTTP GET
        $query_data = array(
            'product_code' => $product_code,
            'before' => $before,
            'after' => $after,
            'count' => $count,
            'child_order_state' => $child_order_state,
            'parent_order_id' => $parent_order_id,
        );
        $json = $this->privateGet(BitFlyerApi::ME_GETCHILDORDERS, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get executions
     *
     * @param string $product_code
     * @param int|null $before
     * @param int|null $after
     * @param int|null $count
     * @param string|null $child_order_id
     * @param string|null $child_order_acceptance_id
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetExecutions(string $product_code, int $before = null, int $after = null, int $count = null,
                                    string $child_order_id = null, string $child_order_acceptance_id = null)
    {
        // HTTP GET
        $query_data = array(
            'product_code' => $product_code,
            'before' => $before,
            'after' => $after,
            'count' => $count,
            'child_order_id' => $child_order_id,
            'child_order_acceptance_id' => $child_order_acceptance_id,
        );
        $json = $this->privateGet(BitFlyerApi::ME_GETEXECUTIONS, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get positions
     *
     * @param string $product_code
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetPositions(string $product_code)
    {
        // HTTP GET
        $query_data = array(
            'product_code' => $product_code,
        );
        $json = $this->privateGet(BitFlyerApi::ME_GETPOSITIONS, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
    
    /**
     * [private] get trading commission
     *
     * @param string $product_code
     *
     * @return mixed
     *
     * @throws Exception
     * @noinspection PhpMissingReturnTypeInspection
     */
    public function meGetTradingCommission(string $product_code)
    {
        // HTTP GET
        $query_data = array(
            'product_code' => $product_code,
        );
        $json = $this->privateGet(BitFlyerApi::ME_GETTRADINGCOMMISSION, $query_data);
        // check return type
        if (!is_array($json)){
            throw new Exception('response must be an array, but returned:' . gettype($json));
        }
        return $json;
    }
}