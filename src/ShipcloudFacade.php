<?php

namespace Dannehl\Shipcloud;

use Illuminate\Support\Facades\Facade;

/**
 * Class ShipcloudFacade
 * @package Dannehl\Shipcloud
 */
class ShipcloudFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'shipcloud';
    }

}