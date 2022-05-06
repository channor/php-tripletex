<?php

namespace Channor\Tripletex\Test;

use Channor\Tripletex\Resource\ResourceBase;
use Channor\Tripletex\Tripletex;
use Channor\Tripletex\TripletexApp;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;

class ResourceTest extends TestCase
{
    public function testServiceIsSet()
    {
        $app = new TripletexApp('secret_consumer_token', 'secret_employee_token');
        $tripletex = new Tripletex($app);

        $session = $tripletex->tokenSession();

        $this->assertTrue($session instanceof ResourceBase);
        $this->assertTrue($session->getService() instanceof Tripletex);
    }
}