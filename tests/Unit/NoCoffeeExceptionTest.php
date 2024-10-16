<?php

use Tests\Unit\CoffeeMachineSingleton;
use Exception;

it('should throw an exception when there\'s no coffee', function () {
  $singleton = CoffeeMachineSingleton::getInstance();
  $coffeeMachine = $singleton->coffeeMachine;

  // Deplete the coffee supply
  while ($coffeeMachine->coffeeMaker->amount > 0) {
    $coffeeMachine->coffeeMaker->getCoffee();
  }

  // Expect an exception when trying to make coffee with no supply
  expect(fn() => $coffeeMachine->makeCoffee("small", 2))->toThrow(Exception::class, "There's no coffee");
});