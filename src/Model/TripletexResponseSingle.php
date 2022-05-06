<?php
declare(strict_types=1);

namespace Channor\Tripletex\Model;

class TripletexResponseSingle
{
    protected $value;

    public function __construct($object = null, $objectModel = null)
    {
        if ($object !== null && $objectModel !== null) {
            $this->value = new $objectModel($object);
        } else {
            $this->value = $object;
        }
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
