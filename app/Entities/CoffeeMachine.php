<?php

namespace App\Entities;

class CoffeeMachine
{

    public array $smallCups = [];
    public array $mediumCups = [];
    public array $largeCups = [];
    public SugarBowl $sugarBowl;
    public int $coffeAmount = 100;
    public CoffeeMaker $coffeeMaker = new CoffeeMaker();

    public function __construct(array $smallCups, array $mediumCups, array $bigCups, SugarBowl $sugarBowl)
    {
        $this->smallCups = $smallCups;
        $this->mediumCups = $mediumCups;
        $this->bigCup = $bigCups;
        $this->sugarBowl = $sugarBowl;
    }


    public function getCup(string $typeOfCup, Coffee $coffee)
    {
        switch (strtolower($typeOfCup)) {
            case "small":
                unset($this->smallCups[0]);
                return new Cup("small", $coffee);

            case "medium":
                unset($this->mediumCups[0]);
                return new Cup("medium", $coffee);

            default:
                unset($this->largeCups[0]);
                return new Cup("large", $coffee);
        }
    }

    public function makeCoffee(string $typeOfCup): Cup
    {
        $coffee = $this->coffeeMaker->getCoffee();
        $cup = $this->getCup($typeOfCup, $coffee);

        return $cup;
    }

}
