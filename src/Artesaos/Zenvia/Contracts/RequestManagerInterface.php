<?php

namespace Artesaos\Zenvia\Contracts;


use Artesaos\Zenvia\Http\RequestManager;
use Http\Client\HttpClient;

interface RequestManagerInterface
{
    /**
     * Send a request.
     *
     * @param string $method
     * @param string $uri
     * @param array|string $body
     * @param $access_code
     * @param string $protocolVersion
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function sendRequest($method, $uri, array $body = [], $access_code, $protocolVersion = '1.1');

    /**
     * @param \Http\Client\HttpClient $httpClient
     * @return RequestManager
     */
    public function setHttpClient(HttpClient $httpClient);

    /**
     * Convert a array field value to the given date format
     *
     * @param array $data   The array
     * @param string $field The field name
     * @param string $format The format to be converted
     * @return mixed
     */
    public function convertDateFormatFromArrayField(array $data, $field, $format);
}