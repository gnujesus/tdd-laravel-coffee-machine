<?php

namespace Tests\Unit;

use App\Entities\Cup;
use App\Entities\SugarBowl;
use App\Entities\CoffeeMachine;

use Tests\Unit\CoffeeMachineSingleton;

it('should decrement medium cups', function () {

  $singleton = CoffeeMachineSingleton::getInstance();

  $coffeeMachine = $singleton->coffeeMachine;

  $mediumCupsBefore = $coffeeMachine->mediumCups;


  // Dispense coffee
  $coffeeMachine->makeCoffee("medium");

  // Assert the coffee supply has decreased by 1
  expect(count($coffeeMachine->mediumCups))->toBe(count($mediumCupsBefore) - 1);
});