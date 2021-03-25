<?php


namespace Dannehl\Shipcloud\api;


class Webhooks extends ApiAbstract
{
    protected $endpoint = 'webhooks';

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
    public function delete($param, $payload = [])
    {
        return $this->request()->delete($this->endpoint . '/' . $param, $payload);
    }
}