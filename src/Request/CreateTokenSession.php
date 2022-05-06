<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Model\SessionTokenModel;

class CreateTokenSession extends TripletexRequest
{
    const REQUEST_PATH = '/token/session/:create';

    const REQUEST_METHOD = 'PUT';

    public function make()
    {
        $expirationDate = $this->getService()->getApp()->getExpirationDate() ??
            new \DateTime($this->getService()->getConfig('session_duration'));

        $clientRequestClass = $this->getService()->getConfig('http_request_class');
        $clientRequest = new $clientRequestClass(
            $this->getRequestMethod(),
            $this->getPath() . '?' . http_build_query(
                [
                    'consumerToken' => $this->getService()->getApp()->getConsumerToken(),
                    'employeeToken' => $this->getService()->getApp()->getEmployeeToken(),
                    'expirationDate' => $expirationDate->format('Y-m-d')
                ]
            ),
        );

        $response = $this->sendRequest($clientRequest, SessionTokenModel::class);

        return $response;
    }
}
