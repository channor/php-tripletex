<?php

namespace Channor\Tripletex\Test;

use Channor\Tripletex\Request\CreateTokenSession;
use Channor\Tripletex\Resource\ResourceBase;
use Channor\Tripletex\Tripletex;
use Channor\Tripletex\TripletexApp;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;

class TokenSessionTest extends TestCase
{
    public function testHttpRequest()
    {
        $app = new TripletexApp('secret_consumer_token', 'secret_employee_token');
        $tripletex = new Tripletex($app);

        $session = $tripletex->tokenSession();

        $request = new CreateTokenSession($tripletex);

        $this->markTestIncomplete();
    }
}
