<?php
declare(strict_types=1);

namespace Channor\Tripletex\Resource;

use Channor\Tripletex\Request\CreateTokenSession;

class TokenSession extends ResourceBase
{
    /**
     * Creates a new tokenSession.
     */
    public function create()
    {
        if ($this->getService()->getApp()->hasValidToken()) {
            return $this;
        }

        $request = new CreateTokenSession($this->getService());

        return $request->make();
    }
}
