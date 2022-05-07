<?php

namespace Channor\Tripletex\Model;

class SubscriptionModel extends BaseModel
{
    protected string $event;

    protected string $targetUrl;

    protected ?string $fields;

    protected ?string $status;

    protected ?string $authHeaderName;

    protected ?string $authHeaderValue;

    public function __construct(array $body)
    {
        parent::__construct($body);

        $value = $body['value'] ?? $body;

        $this->setEvent($value['event']);
        $this->setTargetUrl($value['targetUrl']);
        $this->setFields($value['fields'] ?? null);
        $this->setStatus($value['status'] ?? null);
        $this->setAuthHeaderName($value['authHeaderName'] ?? null);
        $this->setAuthHeaderValue($value['authHeaderValue'] ?? null);
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * @param string $event
     */
    public function setEvent(string $event): self
    {
        $this->event = $event;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetUrl(): string
    {
        return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     */
    public function setTargetUrl(string $targetUrl): self
    {
        $this->targetUrl = $targetUrl;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFields(): ?string
    {
        return $this->fields;
    }

    /**
     * @param string|null $fields
     */
    public function setFields(?string $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthHeaderName(): ?string
    {
        return $this->authHeaderName;
    }

    /**
     * @param string|null $authHeaderName
     */
    public function setAuthHeaderName(?string $authHeaderName): self
    {
        $this->authHeaderName = $authHeaderName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthHeaderValue(): ?string
    {
        return $this->authHeaderValue;
    }

    /**
     * @param string|null $authHeaderValue
     */
    public function setAuthHeaderValue(?string $authHeaderValue): self
    {
        $this->authHeaderValue = $authHeaderValue;
        return $this;
    }


}
