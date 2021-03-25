<?php


namespace Dannehl\Shipcloud\api;


use Dannehl\Shipcloud\lib\Request;

abstract class ApiAbstract
{

    protected $options;

    public function __construct($options = [])
    {
        $this->options = $options;
    }

    /**
     * @return Request
     */
    protected function request()
    {
        return new Request($this->options);
    }
}