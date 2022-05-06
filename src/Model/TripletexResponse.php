<?php
declare(strict_types=1);

namespace Channor\Tripletex\Model;

class TripletexResponse
{
    protected $request;

    protected $httpStatusCode;

    protected $headers;

    protected $body;

    protected $decodedBody = [];

    protected $prettyBody;

    public function __construct($body = null, $httpStatusCode = null, array $headers = [], $request = null)
    {
        $this->body = $body;
        $this->httpStatusCode = $httpStatusCode;
        $this->headers = $headers;
        $this->request = $request;
    }

    public function setBody($body): self
    {
        $this->body = $body;

        return $this;
    }

    public function setPrettyBody($prettyBody): self
    {
        $this->prettyBody = $prettyBody;

        return $this;
    }

    public function setHttpStatusCode($httpStatusCode): self
    {
        $this->httpStatusCode = $httpStatusCode;

        return $this;
    }

    public function setRequest($request): self
    {
        $this->request = $request;

        return $this;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getDecodedBody()
    {
        if (empty($this->decodedBody) || $this->decodedBody === null) {
            $this->decodeBody();
        }

        return $this->decodedBody;
    }

    public function getPrettyBody()
    {
        return $this->prettyBody;
    }

    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    protected function decodeBody()
    {
        $body = $this->getBody();

        $this->decodedBody = (array) json_decode((string) $body, true);
    }
}
