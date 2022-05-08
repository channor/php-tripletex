<?php

namespace Channor\Tripletex\Resource;

use Channor\Tripletex\Request\ListProject;

class Project extends ResourceBase
{
    public function list(?array $params = [])
    {
        $request = new ListProject($this->getService());

        return $request->make($params);
    }
}
