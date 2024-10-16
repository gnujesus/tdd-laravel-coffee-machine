<?php

namespace Tests\Unit;

use App\Entities\Cup;
use App\Entities\SugarBowl;
use App\Entities\CoffeeMachine;
use Tests\Unit\CoffeeMachineSingleton;


it('should decrement small cups', function () {

  $singleton = CoffeeMachineSingleton::getInstance();

  $coffeeMachine = $singleton->coffeeMachine;

  $smallCupsBefore = $coffeeMachine->smallCups;

  // Dispense coffee
  $coffeeMachine->makeCoffee("small");

  // Assert the coffee supply has decreased by 1
  expect(count($coffeeMachine->smallCups))->toBe(count($smallCupsBefore) - 1);
});