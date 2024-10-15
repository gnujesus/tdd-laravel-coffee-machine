<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeMachineController;

Route::get('/', [CoffeeMachineController::class, 'index'])->name('index');
