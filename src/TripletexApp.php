<?php
declare(strict_types=1);

namespace Channor\Tripletex;

class TripletexApp
{
    /**
     * The consumerToken is needed to get token
     *
     * @var string
     */
    protected $consumerToken;

    /**
     * The employeeToken is needed to get token
     *
     * @var string
     */
    protected $employeeToken;

    /**
     * The token is used to authenticate
     *
     * @var string
     */
    protected $token;

    /**
     * The token is useless if today >= $expirationDate
     * Format: Y-m-d
     *
     * @var \DateTimeInterface
     */
    protected $expirationDate;

    /**
     * TripletexApp holds authentication data.
     *
     * @param string                  $consumerToken  Used to create a session
     * @param string                  $employeeToken  Used to create a session
     * @param string|null             $token          Used for authentication
     * @param \DateTimeInterface|null $expirationDate When the token expires
     */
    public function __construct(
        string $consumerToken,
        string $employeeToken,
        ?string $token = null,
        ?\DateTimeInterface $expirationDate = null
    ) {
        $this->consumerToken = $consumerToken;
        $this->employeeToken = $employeeToken;
        $this->token = $token;
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return string
     */
    public function getConsumerToken(): string
    {
        return $this->consumerToken;
    }

    /**
     * @return string
     */
    public function getEmployeeToken(): string
    {
        return $this->employeeToken;
    }

    /**
     * @return string
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param   string $token The token to set
     * @return  self
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function hasValidToken(): bool
    {
        if($this->token === null || !$this->expirationDate instanceof \DateTimeInterface) {
            $this->clearToken();

            return false;
        }

        if(is_string($this->token) && (new \DateTime())->format('Y-m-d') < $this->expirationDate->format('Y-m-d')) {
            return true;
        }

        return false;
    }

    public function clearToken()
    {
        $this->token = null;
        $this->expirationDate = null;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    /**
     * @return self
     */
    public function setExpirationDate(\DateTimeInterface $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }
}
