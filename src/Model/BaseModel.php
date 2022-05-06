<?php
declare(strict_types=1);

namespace Channor\Tripletex\Model;

class BaseModel
{
    protected $id;

    protected $version;

    protected $url;

    public function __construct(array $body)
    {
        $value = $body['value'] ?? $body;

        $this->setId($value['id'] ?? null);
        $this->setVersion($value['version'] ?? null);
        $this->setUrl($value['url'] ?? null);
    }

    public function setId(?int $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    public function setVersion(?int $version = null): self
    {
        $this->version = $version;

        return $this;
    }

    public function setUrl(?string $url = null): self
    {
        $this->url = $url;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVersion(): ?int
    {
        return $this->version;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }
}