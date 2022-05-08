<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Model\SubscriptionModel;

class CreateSubscription extends TripletexRequest
{
    const REQUEST_PATH = '/event/subscription';

    const REQUEST_METHOD = 'POST';

    /**
     * @param array $body array with data
     * @return mixed
     */
    public function make(array $body)
    {
        $clientRequestClass = $this->getService()->getConfig('http_request_class');
        $clientRequest = new $clientRequestClass(
            $this->getRequestMethod(),
            $this->getPath(),
            ['Content-Type' => 'application/json; charset=utf-8'],
            json_encode($body)
        );

        $response = $this->sendRequest($clientRequest, SubscriptionModel::class);

        return $response;
    }
}
