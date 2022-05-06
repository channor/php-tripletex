<?php
declare(strict_types=1);

namespace Channor\Tripletex\Utility;

class Dot
{
    /**
     * Get value from array with a dot separated path to array key.
     *
     * @param array $data An array of data.
     * @param string $path A dot separated string with the path to the array key.
     * @return mixed|null
     */
    public static function get(array $data, string $path)
    {
        if (!is_array($data)) {
            throw new \Exception('Invalid data type');
        }

        if (!is_string($path)) {
            throw new \Exception('Parameter path shall be a dot separated string.');
        }

        if (empty($data) || $path === null) {
            return null;
        }

        $keys = explode('.', $path);

        foreach ($keys as $key) {
            if (is_array($data) && isset($data[$key])) {
                $data = $data[$key];
            } else {
                return null;
            }
        }

        return $data;
    }
}
