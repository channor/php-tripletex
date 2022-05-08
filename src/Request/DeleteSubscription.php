<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Model\SubscriptionModel;

class DeleteSubscription extends TripletexRequest
{
    const REQUEST_PATH = '/event/subscription/{id}';

    const REQUEST_METHOD = 'DELETE';

    /**
     * @param array $params Array query params like id (string, comma-separated), firstName, fields (to select) etc.
     * @return mixed
     */
    public function make($id)
    {
        $clientRequestClass = $this->getService()->getConfig('http_request_class');
        $clientRequest = new $clientRequestClass(
            $this->getRequestMethod(),
            $this->getPath($id),
        );

        $response = $this->sendRequest($clientRequest, SubscriptionModel::class);

        return $response;
    }
}
