<?php

namespace Dannehl\Shipcloud\lib;

/**
 * Class Request
 * @package Blumixx\Shipcloud\lib
 */
class Request
{

    protected $key = '';

    public function __construct($options = [])
    {
        if (array_key_exists('key', $options)) {

            $this->key = $options['key'];
        }
    }

    /**
     * @param string|array $uri
     * @param array $parameters
     * @return mixed
     */
    public function get($uri = null, $parameters = [])
    {
        return json_decode($this->call(__FUNCTION__, $uri, $parameters)->getBody(), true);
    }

    /**
     * @param string|array $uri
     * @param array $parameters
     * @param array $body
     * @return mixed
     */
    public function post($uri = null, $parameters = [], $body = [])
    {
        return json_decode($this->call(__FUNCTION__, $uri, $parameters, $body)->getBody(), true);
    }
    /**
     * @param string|array $uri
     * @param array $parameters
     * @param array $body
     * @return mixed
     */
    public function put($uri = null, $parameters = [], $body = [])
    {
        return json_decode($this->call(__FUNCTION__, $uri, $parameters, $body)->getBody(), true);
    }

    /**
     * @param string|array $uri
     * @param array $parameters
     * @param array $body
     * @return mixed
     */
    public function delete($uri = null, $parameters = [], $body = [])
    {
        return json_decode($this->call(__FUNCTION__, $uri, $parameters, $body)->getBody(), true);
    }

    /**
     * @param $method
     * @param $uri
     * @param array $parameters
     * @param array $body
     * @return mixed
     */
    protected function call($method, $uri, array $parameters = [], array $body = [])
    {
        $options = [
            'query' => $parameters,
            'json'  => $body
        ];

        $client = new GuzzleClient($this->key);

        return call_user_func_array([$client, $method], [$this->buildUri($uri), $options]);
    }

    /**
     * @param $uri
     * @return string
     */
    protected function buildUri($uri)
    {
        if ( is_array($uri)) {
            $uri = implode('/', $uri);
        }

        return rtrim($uri,'/');
    }

}