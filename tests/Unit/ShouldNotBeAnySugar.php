<?php

namespace Tests\Unit;

use App\Entities\Cup;
use Tests\Unit\CoffeeMachineSingleton;



it('should say that there\'s not sugar', function () {


    // TODO: Functionality to select the amount of sugar you want. 

    $singleton = CoffeeMachineSingleton::getInstance();

    $coffeeMachine = $singleton->coffeeMachine;

    $cup = $coffeeMachine->makeCoffee("small", 2);

    expect($cup->type)->toBe('small');
});
