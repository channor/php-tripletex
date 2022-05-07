<?php
declare(strict_types=1);

namespace Channor\Tripletex\Resource;

use Channor\Tripletex\Request\ListSubscription;

class Subscription extends ResourceBase
{
    public function list(?array $params = [])
    {
        $request = new ListSubscription($this->getService());

        return $request->make($params);
    }
}
