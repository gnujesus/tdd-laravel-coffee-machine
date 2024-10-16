<?php

namespace Tests\Unit;

use App\Entities\Cup;
use App\Entities\SugarBowl;
use App\Entities\CoffeeMachine;

class CoffeeMachineSingleton
{

  private static CoffeeMachineSingleton|null $instance = null;
  public CoffeeMachine $coffeeMachine;

  private function __construct(SugarBowl|null $sugarBowl = null)
  {
    $smallCups = [];
    $mediumCups = [];
    $largeCups = [];
    $sugarBowl = $sugarBowl ?? new SugarBowl(10);

    foreach (range(0, 9) as $i) {
      array_push($smallCups, new Cup("small"));
      array_push($mediumCups, new Cup("medium"));
      array_push($largeCups, new Cup("large"));
    }

    $coffeeMachine = new CoffeeMachine(
      $smallCups,
      $mediumCups,
      $largeCups,
      $sugarBowl
    );

    $this->coffeeMachine = new CoffeeMachine($smallCups, $mediumCups, $largeCups, $sugarBowl);
  }

  public function __get(string $name)
  {
    if (strtolower($name) === 'coffeemachine') {
      return $this->coffeeMachine;
    }
  }

  public static function getInstance(SugarBowl|null $sugarBowl = null): CoffeeMachineSingleton
  {
    if (self::$instance == null) {
      self::$instance = new CoffeeMachineSingleton($sugarBowl);
    }
    return self::$instance;
  }
}