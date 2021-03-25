<?php

namespace Dannehl\Shipcloud;

use Illuminate\Support\Facades\Facade;

/**
 * Class ShipcloudFacade
 * @package Dannehl\Shipcloud
 * @mixin \Dannehl\Shipcloud\Shipcloud
 */
class ShipcloudFacade extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'shipcloud';
    }

}