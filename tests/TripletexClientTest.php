<?php

namespace Channor\Tripletex\Test;

use Channor\Tripletex\Model\SessionTokenModel;
use Channor\Tripletex\Model\TripletexResponse;
use Channor\Tripletex\Tripletex;
use Channor\Tripletex\TripletexApp;
use Channor\Tripletex\TripletexClient;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;

class TripletexClientTest extends TestCase
{
    public function testMakeResponse()
    {
        $json = '{"value":{"id":56756,"version":0,"url":"https://tripletex.no/v2/token/session/56756","consumerToken":{"id":345435,"url":"string"},"employeeToken":{"id":34435,"url":"string"},"expirationDate":"2022-05-10","token":"secret_token_key","encryptionKey":""}}';

        $mock = new MockHandler([
            new Response(200, ['Content-type' => 'application/json'], $json)
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $client = new TripletexClient($client);

        $response = $client->getHttpClient()->request(
            'PUT',
            '/' . http_build_query(['employeeToken' => 'secret', 'consumerToken' => 'secret', 'expirationDate' => '2022-05-10'])
        );

        $response = $client->makeResponse($response, SessionTokenModel::class);

        $this->assertTrue($response instanceof TripletexResponse);

        $headers = $response->getHeaders();
        $headerContentType = $headers['Content-type'][0];
        $this->assertSame($headerContentType, 'application/json');
    }
}
