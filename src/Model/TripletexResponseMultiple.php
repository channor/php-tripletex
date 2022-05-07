<?php
declare(strict_types=1);

namespace Channor\Tripletex\Model;

class TripletexResponseMultiple
{
    protected $values = [];

    /**
     * @param array $objects Array of tripletex object. I.e array of employee objects.
     * @param class $objectModel The model to wrap the object elements in.
     */
    public function __construct(array $objects, $objectModel = null)
    {
        if (!empty($objects) && $objectModel !== null) {
            foreach ($objects as $object) {
                $this->values[] = new $objectModel($object);
            }
        }
    }

    public function setValues($values)
    {
        $this->values = $values;
    }

    public function getValues()
    {
        return $this->values;
    }
}
