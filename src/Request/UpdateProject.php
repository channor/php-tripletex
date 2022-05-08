<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Model\ProjectModel;

class UpdateProject extends TripletexRequest
{
    const REQUEST_PATH = '/project/{id}';

    const REQUEST_METHOD = 'PUT';

    /**
     * @param array $params Array query params like id (string, comma-separated), firstName, fields (to select) etc.
     * @return mixed
     */
    public function make($id, array $data = [])
    {
        $clientRequestClass = $this->getService()->getConfig('http_request_class');
        $clientRequest = new $clientRequestClass(
            $this->getRequestMethod(),
            $this->getPath($id),
            ['Content-Type' => 'application/json; charset=utf-8'],
            json_encode($data)
        );

        $response = $this->sendRequest($clientRequest, ProjectModel::class);

        return $response;
    }
}
