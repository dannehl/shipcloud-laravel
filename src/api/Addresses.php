<?php

namespace Dannehl\Shipcloud\api;

/**
 * Class Addresses
 * @package Dannehl\Shipcloud\api
 */
class Addresses extends ApiAbstract
{

    protected $endpoint = 'addresses';

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->request()->get($this->endpoint);
    }

    /**
     * @param $param
     * @return mixed
     */
    public function get($param)
    {
        return $this->request()->get($this->endpoint . '/' . $param);
    }

    /**
     * @param array $payload
     * @return mixed
     */
    public function create($payload = [])
    {
        return $this->request()->post($this->endpoint, $payload);
    }

}