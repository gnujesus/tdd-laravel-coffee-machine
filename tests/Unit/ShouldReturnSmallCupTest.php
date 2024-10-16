<?php

namespace Tests\Unit;

use App\Entities\Cup;
use Tests\Unit\CoffeeMachineSingleton;



it('should return a small cup', function () {


    $singleton = CoffeeMachineSingleton::getInstance();

    $coffeeMachine = $singleton->coffeeMachine;

    $cup = $coffeeMachine->makeCoffee("small");

    expect($cup->type)->toBe('small');
});
