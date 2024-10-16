<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeMachineController;


Route::controller(CoffeeMachineController::class)->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/select-cup', 'selectCup')->name('select-cup');
  Route::get('/select-sugar', 'selectSugar')->name('select-sugar');
  Route::post('/submit-order', 'getCoffee')->name('submit-order');
});