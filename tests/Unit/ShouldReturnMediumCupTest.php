<?php

namespace Tests\Unit;

use App\Entities\Cup;
use Tests\Unit\CoffeeMachineSingleton;



it('should return a medium cup', function () {


    $singleton = CoffeeMachineSingleton::getInstance();

    $coffeeMachine = $singleton->coffeeMachine;

    $cup = $coffeeMachine->makeCoffee("medium");

    expect($cup->type)->toBe('medium');
});
