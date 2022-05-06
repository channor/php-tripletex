<?php
declare(strict_types=1);

namespace Channor\Tripletex;

use Channor\Tripletex\Resource\TokenSession;
use Channor\Tripletex\TripletexApp;
use Channor\Tripletex\TripletexClient;
use Channor\Tripletex\Utility\Dot;

class Tripletex
{
    protected $app;

    protected $client;

    protected $config = [];

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

        $testEnvironment = false;
        if(isset($config['test_environment']) && $config['test_environment'] === true) {
            $testEnvironment = true;
        }

        $this->config = $config;

        $this->app = $app;

        $this->client = new TripletexClient(new $config['http_client_class'](), $testEnvironment);
    }

    public function getApp(): TripletexApp
    {
        return $this->app;
    }

    public function getClient(): TripletexClient
    {
        return $this->client;
    }

    public function getConfig(string $path = '')
    {
        if (!empty($path)) {
            return Dot::get($this->config, $path);
        }

        return $this->config;
    }

    public function tokenSession(): TokenSession
    {
        return new TokenSession($this);
    }
}
