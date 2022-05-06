<?php
declare(strict_types=1);

namespace Channor\Tripletex\Resource;

use Channor\Tripletex\Tripletex;

class ResourceBase
{
    public function __construct(protected Tripletex $service)
    {
    }

    public function getService(): Tripletex
    {
        return $this->service;
    }
}
