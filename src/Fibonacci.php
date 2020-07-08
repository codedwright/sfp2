<?php

namespace Sfp;

class Fibonacci
{
    private $number_array = [];
    private $fibonacci_array = [];
    private $first_number = 1;
    private $second_number = 1;

    // TODO: add constructor arg for size of resulting array / iterations
    public function __construct()
    {
        $file = fopen("assets/fibonacci.csv", "r");

        while (($data = fgetcsv($file)) !== FALSE) {
            $this->setNumberInNumberArray($data[0]);
        }

        $this->sortNumberArray();

        while ($this->getSecondNumber() != $this->getNumberArray()[0]) {
            $this->fibonacci($this->getFirstNumber(), $this->getSecondNumber());
            $this->setNumberInFibonacciArray($this->getSecondNumber());
        }

        for ($i = 0; $i < 9; $i++) {
            $this->fibonacci($this->getFirstNumber(), $this->getSecondNumber());
            $this->setNumberInFibonacciArray($this->getSecondNumber());
        }
    }

    public function setNumberInNumberArray(int $number)
    {
        $this->number_array[] = $number;
    }

    private function sortNumberArray()
    {
        sort($this->number_array);
        return $this;
    }

    /**
     * @return int
     */
    public function getSecondNumber(): int
    {
        return $this->second_number;
    }

    /**
     * @param int $second_number
     * @return Fibonacci
     */
    public function setSecondNumber(int $second_number): Fibonacci
    {
        $this->second_number = $second_number;
        return $this;
    }

    /**
     * @return array
     */
    public function getNumberArray(): array
    {
        return $this->number_array;
    }

    private function fibonacci($first, $second)
    {
        $this->setSecondNumber($first + $second);
        $this->setFirstNumber($second);
    }

    /**
     * @return int
     */
    public function getFirstNumber(): int
    {
        return $this->first_number;
    }

    /**
     * @param int $first_number
     * @return Fibonacci
     */
    public function setFirstNumber(int $first_number): Fibonacci
    {
        $this->first_number = $first_number;
        return $this;
    }

    /**
     * @param int $number
     * @return Fibonacci
     */
    public function setNumberInFibonacciArray(int $number): Fibonacci
    {
        $this->fibonacci_array[] = $number;
        return $this;
    }

    public function execute(): array
    {
        return $this->getFibonacciArray();
    }

    /**
     * @return array
     */
    public function getFibonacciArray(): array
    {
        return $this->fibonacci_array;
    }
}

//$class = new Fibonacci();
//var_dump(
//    $class->execute()
//);

