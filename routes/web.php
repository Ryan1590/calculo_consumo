<?php

use App\Http\Controllers\CombustivelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CombustivelController::class, 'index']);

Route::get('/gasto', [CombustivelController::class, 'gasto']);
