<?php

namespace Dannehl\Shipcloud;

/**
 * Class Shipcloud
 * @package Dannehl\Shipcloud
 */
class Shipcloud
{

    protected $options = [];

    public function __construct($key)
    {
        $this->options = ['key' => $key];
    }

    /**
     * @param $api
     * @param array $params
     * @param array $options
     * @return mixed
     * @throws \Exception
     */
    public function readAll($api, $params = [])
    {
        $class = new $api($this->options);

        if (! method_exists($class,'getAll')) {
            throw new \Exception('Method ' . __FUNCTION__ . ' does not exists for class ' . $api);
        }

        return $class->getAll();
    }

    /**
     * @param $api
     * @param $id
     * @return mixed
     * @throws \Exception
     */
    public function read($api, $id)
    {
        $class = new $api($this->options);

        if (! method_exists($class,'get')) {
            throw new \Exception('Method ' . __FUNCTION__ . ' does not exists for class ' . $api);
        }

        return $class->get($id);
    }

    /**
     * @param $api
     * @param array $payload
     * @param array $options
     * @return mixed
     * @throws \Exception
     */
    public function create($api, $payload = [])
    {
        $class = new $api($this->options);

        if (! method_exists($class,'create')) {
            throw new \Exception('Method ' . __FUNCTION__ . ' does not exists for class ' . $api);
        }

        return $class->create($payload);
    }

    /**
     * @param $api
     * @param $id
     * @param array $payload
     * @return mixed
     * @throws \Exception
     */
    public function update($api, $id, $payload = [])
    {
        $class = new $api($this->options);

        if (! method_exists($class,'update')) {
            throw new \Exception('Method ' . __FUNCTION__ . ' does not exists for class ' . $api);
        }

        return $class->update($id, $payload);
    }

    /**
     * @param $api
     * @param $id
     * @param array $payload
     * @return mixed
     * @throws \Exception
     */
    public function delete($api, $id, $payload = [])
    {
        $class = new $api($this->options);

        if (! method_exists($class,'delete')) {
            throw new \Exception('Method ' . __FUNCTION__ . ' does not exists for class ' . $api);
        }

        return $class->delete($id, $payload);
    }


}