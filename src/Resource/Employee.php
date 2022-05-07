<?php
declare(strict_types=1);

namespace Channor\Tripletex\Resource;

use Channor\Tripletex\Request\CreateEmployee;
use Channor\Tripletex\Request\GetEmployee;
use Channor\Tripletex\Request\ListEmployee;
use Channor\Tripletex\Request\UpdateEmployee;

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

    public function create(array $data)
    {
        $request = new CreateEmployee($this->getService());

        return $request->make($data);
    }

    public function update($id, array $data)
    {
        $request = new UpdateEmployee($this->getService());

        return $request->make($id, $data);
    }
}
