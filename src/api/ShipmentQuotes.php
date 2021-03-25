<?php

namespace Dannehl\Shipcloud\api;

/**
 * Class ShipmentQuotes
 * @package Dannehl\Shipcloud\api
 */
class ShipmentQuotes extends ApiAbstract
{

    protected $endpoint = 'shipment_quotes';

    /**
     * @param array $payload
     * @return mixed
     */
    public function create($payload = [])
    {
        return $this->request()->post($this->endpoint, $payload);
    }

}