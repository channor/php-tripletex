<?php
declare(strict_types=1);

namespace Channor\Tripletex\Resource;

use Channor\Tripletex\Request\GetEmployee;
use Channor\Tripletex\Request\ListEmployee;

class Employee extends ResourceBase
{
    public function get(int $id, array $fields = ['*'])
    {
        $request = new GetEmployee($this->getService());

        return $request->make($id, $fields);
    }

    public function list(array $params)
    {
        $request = new ListEmployee($this->getService());

        return $request->make($params);
    }
}
