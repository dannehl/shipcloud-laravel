<?php

namespace Dannehl\Shipcloud\api;

/**
 * Class Shipments
 * @package Dannehl\Shipcloud\api
 */
class Shipments extends ApiAbstract
{

    protected $endpoint = 'shipments';

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

    /**
     * @param $param
     * @param array $payload
     * @return mixed
     */
    public function update($param, $payload = [])
    {
        return $this->request()->put($this->endpoint . '/' . $param, $payload);
    }

    /**
     * @param $param
     * @param array $payload
     * @return mixed
     */
    public function delete($param, $payload = [])
    {
        return $this->request()->delete($this->endpoint . '/' . $param, $payload);
    }

}