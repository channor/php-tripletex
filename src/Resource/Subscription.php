<?php
declare(strict_types=1);

namespace Channor\Tripletex\Resource;

use Channor\Tripletex\Request\CreateSubscription;
use Channor\Tripletex\Request\DeleteSubscription;
use Channor\Tripletex\Request\GetSubscription;
use Channor\Tripletex\Request\ListSubscription;

class Subscription extends ResourceBase
{
    public function get($id, array $fields = ['*'])
    {
        $request = new GetSubscription($this->getService());

        return $request->make($id, $fields);
    }

    public function list(?array $params = [])
    {
        $request = new ListSubscription($this->getService());

        return $request->make($params);
    }

    public function create(array $params)
    {
        $request = new CreateSubscription($this->getService());

        return $request->make($params);
    }

    public function delete($id)
    {
        $request = new DeleteSubscription($this->getService());

        return $request->make($id);
    }
}
