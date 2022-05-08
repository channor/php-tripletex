<?php
declare(strict_types=1);

namespace Channor\Tripletex;

use Channor\Tripletex\Resource\Employee;
use Channor\Tripletex\Resource\Subscription;
use Channor\Tripletex\Resource\TokenSession;
use Channor\Tripletex\TripletexApp;
use Channor\Tripletex\TripletexClient;
use Channor\Tripletex\Utility\Dot;

class Tripletex
{
    /**
     * @var \Channor\Tripletex\TripletexApp
     */
    protected $app;

    /**
     * @var \Channor\Tripletex\TripletexClient
     */
    protected $client;

    /**
     * @var array|string[]
     */
    protected $config = [];

    /**
     * @param \Channor\Tripletex\TripletexApp $app
     * @param array $config
     */
    public function __construct(TripletexApp $app, array $config = [])
    {
        $config = array_merge(
            [
                'session_duration' => '+1 week',
                'http_client_class' => '\GuzzleHttp\Client',
                'http_request_class' => '\GuzzleHttp\Psr7\Request',
            ],
            $config
        );

        $this->config = $config;

        $this->app = $app;

        $this->client = new TripletexClient(new $config['http_client_class']());
    }

    /**
     * @return \Channor\Tripletex\TripletexApp
     */
    public function getApp(): TripletexApp
    {
        return $this->app;
    }

    /**
     * @return \Channor\Tripletex\TripletexClient
     */
    public function getClient(): TripletexClient
    {
        return $this->client;
    }

    /**
     * @param string $path Dot notation, path to config
     * @return array|string[]|null
     * @throws \Exception If $this->config is not an array and path is not a string.
     */
    public function getConfig(string $path = '')
    {
        if (!empty($path)) {
            return Dot::get($this->config, $path);
        }

        return $this->config;
    }

    /**
     * @return TokenSession
     */
    public function tokenSession(): TokenSession
    {
        return new TokenSession($this);
    }

    /**
     * @return Employee
     */
    public function employee(): Employee
    {
        return new Employee($this);
    }

    /**
     * @return Subscription
     */
    public function subscription(): Subscription
    {
        return new Subscription($this);
    }
}
