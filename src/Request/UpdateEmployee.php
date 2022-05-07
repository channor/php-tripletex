<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Model\EmployeeModel;

class UpdateEmployee extends TripletexRequest
{
    const REQUEST_PATH = '/employee/{id}';

    const REQUEST_METHOD = 'PUT';

    /**
     * @param array $body array with data
     * @return mixed
     */
    public function make($id, array $body)
    {
        $clientRequestClass = $this->getService()->getConfig('http_request_class');
        $clientRequest = new $clientRequestClass(
            $this->getRequestMethod(),
            $this->getPath($id),
            ['Content-Type' => 'application/json; charset=utf-8'],
            json_encode($body)
        );

        $response = $this->sendRequest($clientRequest, EmployeeModel::class);

        return $response;
    }
}
