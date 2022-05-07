<?php

namespace jtlimson\BitFlyer\Services;
use jtlimson\BitFlyer\Contracts\BitFlyerApi;
use Exception;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;
use Psr\Http\Message\StreamInterface;

abstract class ApiClient
{
    private $api_key;

    private $api_secret;

    private $last_request;

    public function __construct()
    {
        $this->api_key = config('bitflyer.api_key');
        $this->api_secret = config('bitflyer.api_secret');
        $this->last_request = null;
    }

    protected function get(string $api, array $query_data = [])
    {
        $query_data = array_filter($query_data, function($v){
            return $v !== null;
        });

        $url = self::getURL($api, $query_data);
        
        $request = new Request(BitFlyerApi::GET, $url);
    
        return $this->executeRequest($request);
    }
    public function getLastResponse()
    {
        return $this->last_request;
    }

    protected function privatePost(string $path, array $post_data = null)
    {
        $post_data = array_filter($post_data, function($v){
            return $v !== null;
        });
        
        $timestamp = time();
        $method = BitFlyerApi::POST;
        $body = !empty($post_data) ? json_encode($post_data, JSON_FORCE_OBJECT) : '';
       
        $url = self::getURL($path);
        $text = $timestamp . $method . $path . $body;

        $sign = hash_hmac('sha256', $text, $this->api_secret);
      
        $options = array(
            'ACCESS-KEY' => $this->api_key,
            'ACCESS-TIMESTAMP' => $timestamp,
            'ACCESS-SIGN' => $sign,
            'Content-Type' => 'application/json',
        );
        
        $request = new Request($method, $url, $options, $body);

        return $this->executeRequest($request);
    }

    protected function privateGet(string $api, array $query_data = [])
    {
        $query_data = array_filter($query_data, function($v){
            return $v !== null;
        });

        $timestamp = time();
        $method = BitFlyerApi::GET;
        $body = !empty($query_data) ? '?' . http_build_query($query_data) : '';
        $text = $timestamp . $method . $api . $body;
        $sign = hash_hmac('sha256', $text, $this->api_secret);
        
        $options = array(
            'ACCESS-KEY' => $this->api_key,
            'ACCESS-TIMESTAMP' => $timestamp,
            'ACCESS-SIGN' => $sign,
        );
        
        $url = self::getURL($api, $query_data);
        $request = new Request('GET', $url, $options);

        return $this->executeRequest($request);
    }
    
    private static function getURL(string $api, array $query_data = null) : string
    {
        $url = BitFlyerApi::ENDPOINT . $api;
        if ($query_data){
            $glue = strpos($url,'?') === false ? '?' : '&';
            $url .= $glue . http_build_query($query_data);
        }
        return $url;
    }

    private function executeRequest(Request $request)
    {
        try{
            $client = new Client();
            $response = $client->send($request);
            $this->last_request = $response;
            $json = @json_decode($response->getBody(), true);
            if ($json === null){
                throw new Exception("null exception");
            }
            return $json;
        }
        catch(Exception $e)
        {
            throw new Exception('sendRequest() failed: ' . $e);
        }
    }
}