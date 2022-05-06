<?php
declare(strict_types=1);

namespace Channor\Tripletex\Resource;

use Channor\Tripletex\Request\GetEmployee;

class Employee extends ResourceBase
{
    public function get(int $id, array $fields = ['*'])
    {
        $request = new GetEmployee($this->getService());

        return $request->make($id, $fields);
    }
}
