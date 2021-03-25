<?php

namespace Dannehl\Shipcloud\api;

/**
 * Class Carriers
 * @package Dannehl\Shipcloud\api
 */
class Carriers extends ApiAbstract
{

    protected $endpoint = 'carriers';

    /**
     * @param array $params
     * @return mixed
     */
    public function getAll($params = [])
    {
        return $this->request()->get($this->endpoint);
    }

}