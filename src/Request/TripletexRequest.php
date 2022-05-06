<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Exception\TripletexException;
use Channor\Tripletex\Tripletex;
use Exception;
use Psr\Http\Message\RequestInterface as ClientRequestInterface;

class TripletexRequest
{
    protected $service;

    public function __construct(Tripletex $service)
    {
        $this->service = $service;
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

    public function getPath(?int $id = null)
    {
        $path = $this->getService()->getClient()->getBasePath() . $this->getRequestPath();

        if(strpos($this->getRequestPath(), '{id}') && $id !== null) {
            $path = str_replace('{id}', (string)$id, $path);
        }

        return $path;
    }

    /**
     * @todo Make a better exception to expplane the error.
     * @param \Psr\Http\Message\RequestInterface $clientRequest The request to send
     * @param bool                               $auth          If the request needs authentication
     * @return mixed
     */
    public function sendRequest(ClientRequestInterface $clientRequest, $responseModel, bool $auth = true)
    {
        if ($auth === true && $this->getService()->getApp()->hasValidToken()) {
            $clientRequest = $clientRequest->withAddedHeader(
                'Authorization',
                'Basic ' . $this->getService()->getApp()->getEncodedToken()
            );
        }

        // Add accept header
        $clientRequest = $clientRequest->withAddedHeader('Accept', 'application/json');

        // Send request and get response
        $response = $this->getService()->getClient()->getHttpClient()->sendRequest($clientRequest);

        if($response->getStatusCode() >= 400 && $response->getStatusCode() <= 500) {
            throw new \Exception('An error occurred.');
        }

        return $this->getService()->getClient()->makeResponse($response, $responseModel, $clientRequest);
    }
}
