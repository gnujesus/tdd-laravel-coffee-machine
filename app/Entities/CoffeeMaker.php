<?php

namespace App\Entities;

class CoffeeMaker
{

    public int $amountOfCoffee = 0;
    public Coffee $coffee = new Coffee('Cappuccino');

    public function __construct()
    {
        //
    }

    public function getCoffee(): Coffee
    {
        return $this->coffee;
    }
}
