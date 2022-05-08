<?php
declare(strict_types=1);

namespace Channor\Tripletex\Request;

use Channor\Tripletex\Model\ProjectModel;

class GetProject extends TripletexRequest
{
    const REQUEST_PATH = '/project/{id}';

    const REQUEST_METHOD = 'GET';

    /**
     * @param array $params Array query params like id (string, comma-separated), firstName, fields (to select) etc.
     * @return mixed
     */
    public function make($id, array $params = [])
    {
        $clientRequestClass = $this->getService()->getConfig('http_request_class');
        $clientRequest = new $clientRequestClass(
            $this->getRequestMethod(),
            $this->getPath($id) . '?' . http_build_query($params),
        );

        $response = $this->sendRequest($clientRequest, ProjectModel::class);

        return $response;
    }
}
