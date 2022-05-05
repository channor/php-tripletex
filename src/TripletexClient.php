<?php
declare(strict_types=1);

namespace Channor\Tripletex;

use Psr\Http\Client\ClientInterface;

class TripletexClient
{
    const BASE_PATH = 'https://tripletex.no/v2';

    const TEST_BASE_PATH = 'https://api.tripletex.io/v2';

    protected $httpClient;

    public function __construct(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    public function getBasePath(): string
    {
        return static::BASE_PATH;
    }
}
