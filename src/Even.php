<?php

namespace Sfp;

class Even
{
    public $number_array = [];

    public function __construct()
    {
        $file = fopen("assets/numbers.csv", "r");

        while (($data = fgetcsv($file)) !== FALSE) {
            if ($data[0] % 2 == 0) $this->setNumberArray($data[0]);
        }
    }

    public function execute(): int
    {
        return count($this->getNumberArray());
    }

    /**
     * @return array
     */
    public function getNumberArray(): array
    {
        return $this->number_array;
    }

    /**
     * @param int $number
     * @return Even
     */
    public function setNumberArray(int $number): Even
    {
        $this->number_array[] = $number;
        return $this;
    }

}

//$class = new Even();
//var_dump(
//    $class->execute()
//);