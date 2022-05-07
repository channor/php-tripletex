<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Model\SubscriptionModel;

class ListSubscription extends TripletexRequest
{
    const REQUEST_PATH = '/event/subscription';

    const REQUEST_METHOD = 'GET';

    /**
     * @param array $params Array query params like id (string, comma-separated), firstName, fields (to select) etc.
     * @return mixed
     */
    public function make(array $params = [])
    {
        $clientRequestClass = $this->getService()->getConfig('http_request_class');
        $clientRequest = new $clientRequestClass(
            $this->getRequestMethod(),
            $this->getPath() . '?' . http_build_query($params),
        );

        $response = $this->sendRequest($clientRequest, SubscriptionModel::class);

        return $response;
    }
}
