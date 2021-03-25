<?php

namespace Dannehl\Shipcloud\api;

/**
 * Class Trackers
 * @package Dannehl\Shipcloud\api
 */
class Trackers extends ApiAbstract
{

    protected $endpoint = 'trackers';

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