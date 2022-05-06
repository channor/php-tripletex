<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Model\EmployeeModel;

class GetEmployee extends TripletexRequest
{
    const REQUEST_PATH = '/employee/{id}';

    const REQUEST_METHOD = 'GET';

    /**
     * @param int $id The id of the employee
     * @param array $fields Array of fields to select/retrieve
     * @return mixed
     */
    public function make(int $id, array $fields = [])
    {
        $clientRequestClass = $this->getService()->getConfig('http_request_class');
        $clientRequest = new $clientRequestClass(
            $this->getRequestMethod(),
            $this->getPath($id) . '?' . http_build_query(['fields' => implode(',', $fields)]),
        );

        $response = $this->sendRequest($clientRequest, EmployeeModel::class);

        return $response;
    }
}
