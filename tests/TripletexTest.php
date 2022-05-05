<?php

namespace Channor\Tripletex\Test;

use Channor\Tripletex\Tripletex;
use Channor\Tripletex\TripletexApp;
use Channor\Tripletex\TripletexClient;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;

class TripletexTest extends TestCase
{
    public function testTripletexConstructor()
    {
        $app = new TripletexApp('secret_consumer_token', 'secret_employee_token');
        $tripletex = new Tripletex($app);

        $this->assertTrue($tripletex->getApp() instanceof TripletexApp);
        $this->assertSame($tripletex->getApp()->getConsumerToken(), 'secret_consumer_token');
        $this->assertSame($tripletex->getApp()->getEmployeeToken(), 'secret_employee_token');
        $this->assertNull($tripletex->getApp()->getToken());
        $this->assertFalse($tripletex->getApp()->hasValidToken());
        $this->assertNull($tripletex->getApp()->getExpirationDate());

        $this->assertTrue($tripletex->getClient() instanceof TripletexClient);
        $this->assertTrue($tripletex->getClient()->getHttpClient() instanceof ClientInterface);
        $this->assertSame($tripletex->getClient()->getBasePath(), 'https://tripletex.no/v2');
    }

    public function testSetTokenAndExpirationDateInApp()
    {
        $app = new TripletexApp('secret_consumer_token', 'secret_employee_token');
        $tripletex = new Tripletex($app);

        $tripletex->getApp()->setToken('secret_session_token');
        $tripletex->getApp()->setExpirationDate(new \DateTime('+3 weeks'));

        $this->assertSame($tripletex->getApp()->getToken(), 'secret_session_token');
        $this->assertSame(
            $tripletex->getApp()->getExpirationDate()->format('Y-m-d'),
            (new \DateTime('+3 weeks'))->format('Y-m-d')
        );
        $this->assertTrue($tripletex->getApp()->hasValidToken());
    }
}
