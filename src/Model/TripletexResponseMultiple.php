<?php
declare(strict_types=1);

namespace Channor\Tripletex\Model;

class TripletexResponseMultiple
{
    protected int $fullResultSize;

    protected int $from;

    protected int $count;

    protected string $versionDigest;

    protected $values = [];

    /**
     * @param array $body Array of tripletex object. I.e array of employee objects.
     * @param class $objectModel The model to wrap the object elements in.
     */
    public function __construct(array $body, $objectModel = null)
    {
        if (!empty($body['values']) && $objectModel !== null) {
            foreach ($body['values'] as $value) {
                $this->values[] = new $objectModel($value);
            }
        }

        $this->setFrom($body['from']);
        $this->setFullResultSize($body['fullResultSize']);
        $this->setCount($body['count']);
        $this->setVersionDigest($body['versionDigest']);
    }

    public function setValues($values)
    {
        $this->values = $values;
    }

    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return int
     */
    public function getFullResultSize(): int
    {
        return $this->fullResultSize;
    }

    /**
     * @param int $fullResultSize
     */
    public function setFullResultSize(int $fullResultSize): self
    {
        $this->fullResultSize = $fullResultSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @param int $from
     */
    public function setFrom(int $from): self
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersionDigest(): string
    {
        return $this->versionDigest;
    }

    /**
     * @param string $versionDigest
     */
    public function setVersionDigest(string $versionDigest): self
    {
        $this->versionDigest = $versionDigest;
        return $this;
    }


}
