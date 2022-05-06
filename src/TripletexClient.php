<?php
declare(strict_types=1);

namespace Channor\Tripletex;

use Channor\Tripletex\Model\TripletexResponse;
use Channor\Tripletex\Model\TripletexResponseSingle;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class TripletexClient
{
    const BASE_PATH = 'https://tripletex.no/v2';

    const TEST_BASE_PATH = 'https://api.tripletex.io/v2';

    protected $httpClient;

    protected $testEnvironment = false;

    public function __construct(ClientInterface $httpClient, bool $testEnvironment = false)
    {
        $this->httpClient = $httpClient;
        $this->testEnvironment = $testEnvironment;
    }

    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    public function getBasePath(): string
    {
        return $this->testEnvironment === false ? static::BASE_PATH : static::TEST_BASE_PATH;
    }

    public function makeResponse(ResponseInterface $response, $responseModel, $request = null): TripletexResponse
    {
        $tripletexResponse = new TripletexResponse();
        $tripletexResponse->setBody($response->getBody()->getContents())
            ->setHeaders($response->getHeaders())
            ->setHttpStatusCode($response->getStatusCode())
            ->setRequest($request);

        $body = $tripletexResponse->getDecodedBody();

        if (isset($body['value'])) {
            $wrapper = new TripletexResponseSingle($body['value'], $responseModel);
        } elseif ($body['values']) {
            $wrapper = new TripletexResponseMultiple($body['values'], $responseModel);
        } else {
            $wrapper = true;
        }

        $tripletexResponse->setPrettyBody($wrapper);

        return $tripletexResponse;
    }
}
