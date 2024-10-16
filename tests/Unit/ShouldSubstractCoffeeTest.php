<?php

namespace Tests\Unit;

use Tests\Unit\CoffeeMachineSingleton;



it('should decrement coffee supply', function () {


    $singleton = CoffeeMachineSingleton::getInstance();

    $coffeeMachine = $singleton->coffeeMachine;

    $coffeeSupplyBefore = $coffeeMachine->coffeeSupply;

    // Dispense coffee
    $coffeeMachine->makeCoffee("small");

    // Assert the coffee supply has decreased by 1
    expect($coffeeMachine->coffeeSupply)->toBe($coffeeSupplyBefore - 1);
});
