<?php

namespace Sfp;

// http://www.dcaulfield.com/can-solve-hackerranks-array-rotation-using-php/
class Rotate
{
    private $rotated_array = [];

    public function __construct(int $rotations)
    {
//      var_dump("constructed");
        $json_as_array = json_decode(file_get_contents("assets/rotate.json"));
//      var_dump($json_as_array);
        $array_len = count($json_as_array);
        foreach ($json_as_array as $key => $value) {
            $new_key = $key - $rotations;
            if ($new_key < 0) {
                $new_key = $new_key + $array_len;
            }
            $this->setItemsInRotatedArray($new_key, $value);
        }
    }

    /**
     * @param int $key
     * @param $value
     * @return Rotate
     */
    public function setItemsInRotatedArray(int $key, $value): Rotate
    {
        $this->rotated_array[$key] = $value;
        return $this;
    }

    /**
     * @return array
     */
    public function getRotatedArray(): array
    {
        return $this->rotated_array;
    }

    public function execute(): array
    {
        $array = $this->getRotatedArray();
        ksort($array);
        return $array;
    }
}
//$class = new Rotate(2);
//var_dump(
//    $class->execute()
//);