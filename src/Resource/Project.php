<?php

namespace Channor\Tripletex\Resource;

use Channor\Tripletex\Request\GetProject;
use Channor\Tripletex\Request\ListProject;
use Channor\Tripletex\Request\UpdateProject;

class Project extends ResourceBase
{
    public function list(?array $params = ['fields' => '*'])
    {
        $request = new ListProject($this->getService());

        return $request->make($params);
    }

    public function get($id, array $fields = ['fields' => '*'])
    {
        $request = new GetProject($this->getService());

        return $request->make($id, $fields);
    }

    public function update($id, array $data)
    {
        $request = new UpdateProject($this->getService());

        return $request->make($id, $data);
    }
}
