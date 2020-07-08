<?php

namespace Sfp;

class Extend extends Rotate
{
    public function extend()
    {
        $array = $this->execute();
//        var_dump($array);
        return (string)$array[count($array) - 1];
    }

}

//$class = new Extend(2);
//var_dump(
//    $class->extend()
//);