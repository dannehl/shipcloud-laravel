<?php

namespace Dannehl\Shipcloud\lib;

use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Class GuzzleClient
 * @package Shipcloud\lib
 */
class GuzzleClient extends Client
{
    /** @var string */
    protected $apiKey;

    /** @var string */
    protected $baseUrl = 'https://api.shipcloud.io/v1/';

    /** @var array */
    protected $config = [
        'contentType'   => 'application/json',
        'userAgent'     => 'ShipcloudConnecter/1.0'
    ];

    /**
     * ShipcloudHttpClient constructor.
     *
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;

        parent::__construct([
            'base_uri' => $this->baseUrl,
            'auth' => [$apiKey, null],
            'headers' => [
                'Content-Type' => $this->config['contentType'],
                'User-Agent' => $this->config['userAgent']
            ]
        ]);
    }

    /**
     * @param RequestInterface $request
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        return parent::send($request, $options);
    }


}