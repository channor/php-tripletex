<?php
declare(strict_types=1);

namespace Channor\Tripletex;

use Channor\Tripletex\TripletexApp;
use Channor\Tripletex\TripletexClient;

class Tripletex
{
    protected $app;

    protected $client;

    public function __construct(TripletexApp $app, array $config = [])
    {
        $config = array_merge(
            [
                'session_duration' => '+1 week',
                'http_client_class' => '\GuzzleHttp\Client',
            ],
            $config
        );

        $this->app = $app;

        $this->client = new TripletexClient(new $config['http_client_class']());
    }

    public function getApp(): TripletexApp
    {
        return $this->app;
    }

    public function getClient(): TripletexClient
    {
        return $this->client;
    }
}
