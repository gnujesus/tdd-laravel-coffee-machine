<?php

namespace Tests\Unit;

use Tests\Unit\CoffeeMachineSingleton;

it('should decrement large cups', function () {

  $singleton = CoffeeMachineSingleton::getInstance();

  $coffeeMachine = $singleton->coffeeMachine;

  $largeCupsBefore = $coffeeMachine->largeCups;

  // Dispense coffee
  $coffeeMachine->makeCoffee("large");

  // Assert the coffee supply has decreased by 1
  expect(count($coffeeMachine->largeCups))->toBe(count($largeCupsBefore) - 1);
});