<?php

namespace App\Entities;

use Exception;

class CoffeeMachine
{

    public array $smallCups = [];
    public array $mediumCups = [];
    public array $largeCups = [];
    public SugarBowl $sugarBowl;
    public CoffeeMaker $coffeeMaker; // initial amount of coffe to 10

    public function __construct(array $smallCups, array $mediumCups, array $largeCups, SugarBowl $sugarBowl = new SugarBowl(10))
    {
        $this->smallCups = $smallCups;
        $this->mediumCups = $mediumCups;
        $this->largeCups = $largeCups;
        $this->sugarBowl = $sugarBowl;
        $this->coffeeMaker = new CoffeeMaker(100);
    }

    public function __get(string $name)
    {
        // it'll work even if you go like "cofEeSupPlY"
        if (strtolower($name) === "coffeesupply") {
            return $this->coffeeMaker->amount;
        }
    }

    private function getCup(string $typeOfCup, Coffee $coffee)
    {
        switch (strtolower($typeOfCup)) {
            case "small":
                unset($this->smallCups[0]);

                // using unset doesn't reindex the array, so you have to reassign it to be reindexed using array_values
                $this->smallCups = array_values($this->smallCups);
                return new Cup("small", $coffee);

            case "medium":
                unset($this->mediumCups[0]);

                // using unset doesn't reindex the array, so you have to reassign it to be reindexed using array_values
                $this->mediumCups = array_values($this->mediumCups);
                return new Cup("medium", $coffee);

            default:
                unset($this->largeCups[0]);

                // using unset doesn't reindex the array, so you have to reassign it to be reindexed using array_values
                $this->largeCups = array_values($this->largeCups);
                return new Cup("large", $coffee);
        }
    }

    public function makeCoffee(string $typeOfCup, int $amountOfSugar = 0): Cup|string
    {
        // get the coffeee and add it to the cup
        $coffee = $this->coffeeMaker->getCoffee();

        if ($coffee == null) {
            throw new Exception("there's no coffee");
        }

        $cup = $this->getCup($typeOfCup, $coffee);

        // add sugar to the cup
        $currentSugar = $this->sugarBowl->addSugar($amountOfSugar);

        if ($currentSugar < 0) {
            throw new Exception("there's no sugar");
        }

        $cup->amountOfSugar = $amountOfSugar;

        return $cup;
    }

}
