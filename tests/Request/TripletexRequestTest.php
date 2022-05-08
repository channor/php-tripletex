<?php

namespace Channor\Tripletex\Test\Request;

use Channor\Tripletex\Request\GetEmployee;
use Channor\Tripletex\Request\ListEmployee;
use Channor\Tripletex\Request\TripletexRequest;
use Channor\Tripletex\Tripletex;
use Channor\Tripletex\TripletexApp;

class TripletexRequestTest extends \PHPUnit\Framework\TestCase
{
    public function testTripletexRequestServiceIsSetTest()
    {
        $service = new Tripletex(new TripletexApp('secret', 'secret'));

        $request = new TripletexRequest($service);

        $this->assertTrue($request->getService() instanceof Tripletex);
    }

    public function testGetPath()
    {
        $service = new Tripletex(new TripletexApp('secret', 'secret'));

        $request = new ListEmployee($service);

        $this->assertSame('https://tripletex.no/v2/employee', $request->getPath());
    }

    public function testGetPathWithoutRequestPath()
    {
        $service = new Tripletex(new TripletexApp('secret', 'secret'));

        $request = new TripletexRequest($service);

        $this->expectError();

        // Constant REQUEST_PATH is not set in TripletexRequest
        $request->getPath();
    }

    public function testGetPathWithId()
    {
        $service = new Tripletex(new TripletexApp('secret', 'secret'));

        $request = new GetEmployee($service);

        $this->assertSame('https://tripletex.no/v2/employee/45', $request->getPath(45));
    }
}
