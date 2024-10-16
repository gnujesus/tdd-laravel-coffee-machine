<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Entities\CoffeeMachine;
use Tests\Unit\CoffeeMachineSingleton;

class CoffeeMachineController extends Controller
{
    public CoffeeMachineSingleton $singleton;

    public function __construct()
    {
        if (session()->has('coffee_machine_singleton')) {
            $this->singleton = session('coffee_machine_singleton');
        } else {
            $this->singleton = CoffeeMachineSingleton::getInstance();
            session(['coffee_machine_singleton' => $this->singleton]);
        }
    }

    public function index()
    {
        return view('index');
    }

    public function selectCup()
    {
        return view('cup');
    }

    public function selectSugar(Request $request)
    {
        $cupSize = $request->input('cup_size');
        return view('sugar', ['cup_size' => $cupSize]);
    }

    public function getCoffee(Request $request)
    {
        $cupSize = $request->input('cup_size');
        $amountOfSugar = $request->input('sugar_amount');

        try {
            $cup = $this->singleton->coffeeMachine->makeCoffee($cupSize, $amountOfSugar);
            session(['coffee_machine_singleton' => $this->singleton]); // Update session
            return view('success', ['cup' => $cup, 'log' => $this->singleton->coffeeMachine]);
        } catch (Exception $e) {
            return view('failed', ['errorMessage' => $e->getMessage()]);
        }
    }

}
