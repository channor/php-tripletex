<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Tripletex;
use Psr\Http\Message\RequestInterface as ClientRequestInterface;

class TripletexRequest
{
    public function __construct(protected Tripletex $service)
    {
    }

    public function getService(): Tripletex
    {
        return $this->service;
    }

    public function getRequestPath(): string
    {
        return static::REQUEST_PATH;
    }

    public function getRequestMethod(): string
    {
        return static::REQUEST_METHOD;
    }

    public function getPath()
    {
        return $this->getService()->getClient()->getBasePath() . $this->getRequestPath();
    }

    /**
     * @param \Psr\Http\Message\RequestInterface $clientRequest The request to send
     * @param bool                               $auth          If the request needs authentication
     * @return mixed
     */
    public function sendRequest(ClientRequestInterface $clientRequest, $responseModel, bool $auth = true): mixed
    {
        if ($auth === true && $this->getService()->getApp()->hasValidToken()) {
            $clientRequest->withAddedHeader(
                'Authorization',
                'Basic ' . $this->getService()->getApp()->getEncodedToken()
            );
        }

        // Add accept header
        $clientRequest->withAddedHeader('Accept', 'application/json');

        // Send request and get response
        $response = $this->getService()->getClient()->getHttpClient()->sendRequest($clientRequest);

        if($response->getStatusCode() >= 400 && $response->getStatusCode() <= 500) {
            throw new \Exception($response->getMessage());
        }

        return $this->getService()->getClient()->makeResponse($response, $responseModel, $clientRequest);
    }
}
