<?php

namespace App\Entities;

class CoffeeMaker
{

    public int $amountOfCoffee;
    public Coffee $coffee;

    public function __construct(int $amountOfCoffee = 0)
    {
        $this->amountOfCoffee = $amountOfCoffee;
        $this->coffee = new Coffee('Cappuccino');
    }

    public function __get(string $name)
    {
        if (strtolower($name) === 'amount') {
            return $this->amountOfCoffee;
        }
    }

    public function getCoffee(): Coffee|null
    {
        if ($this->amountOfCoffee <= 0) {
            return null;
        }


        $this->amountOfCoffee -= 1;

        return $this->coffee;
    }
}
