<?php
declare(strict_types=1);

namespace Channor\Tripletex\Model;

class SessionTokenModel extends BaseModel
{
    protected $consumerToken = [];

    protected $employeeToken = [];

    protected $expirationDate;

    protected $token;

    protected $encryptionKey;

    public function __construct(array $body)
    {
        parent::__construct($body);

        $value = $body['value'] ?? $body;

        $this->setConsumerToken($value['consumerToken'] ?? null);
        $this->setEmployeeToken($value['employeeToken'] ?? null);
        $this->setExpirationDate($value['expirationDate'] ?? null);
        $this->setToken($value['token'] ?? null);
        $this->setEncryptionKey($value['encryptionKey'] ?? null);
    }

    public function setConsumerToken(array $consumerToken = []): self
    {
        $this->consumerToken = $consumerToken;

        return $this;
    }

    public function setEmployeeToken(array $employeeToken = []): self
    {
        $this->employeeToken = $employeeToken;

        return $this;
    }

    public function setExpirationDate(?string $expirationDate = null): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function setToken(?string $token = null): self
    {
        $this->token = $token;

        return $this;
    }

    public function setEncryptionKey(?string $encryptionKey = null): self
    {
        $this->encryptionKey = $encryptionKey;

        return $this;
    }

    public function getConsumerToken(): ?string
    {
        return $this->consumerToken;
    }

    public function getEmployeeToken(): ?string
    {
        return $this->employeeToken;
    }

    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }
}
