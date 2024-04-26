<?php

use App\Http\Controllers\BeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BeeController::class, 'index'])->name('bee-game');
Route::post('/hit', [BeeController::class, 'hitRandomBee'])->name('hit-random-bee');
