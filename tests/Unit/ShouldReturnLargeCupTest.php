<?php

namespace Tests\Unit;

use App\Entities\Cup;
use Tests\Unit\CoffeeMachineSingleton;



it('should return a large cup', function () {


    $singleton = CoffeeMachineSingleton::getInstance();

    $coffeeMachine = $singleton->coffeeMachine;

    $cup = $coffeeMachine->makeCoffee("large");

    expect($cup->type)->toBe('large');
});
