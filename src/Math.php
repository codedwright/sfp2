<?php

namespace Sfp;

class Math
{
    private $tabular_array = [];

    /**
     * @return array
     */
    public function getTabularArray(): array
    {
        return $this->tabular_array;
    }

    /**
     * @param int $number
     * @return Math
     */
    public function setNumberInTabularArray(int $number): Math
    {
        $this->tabular_array[] = $number;
        return $this;
    }

    public function __construct()
    {
        $file = fopen("assets/tabular.csv","r");
        fgetcsv($file); // ignore the header
        while (($data = fgetcsv($file)) !== FALSE)
        {
            if($data[2] === "true") {
                $this->setNumberInTabularArray($data[1]);
            }
        }
    }

    /**
     * @return double
     */
    public function execute() {
        $average = array_sum($this->getTabularArray()) / count($this->getTabularArray());
        return (double) round($average, 10);
    }
}

$class = new Math();
var_dump(
    $class->execute()
);