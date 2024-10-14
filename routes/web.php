<?php

use App\Http\Controllers\PlantaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('plantas', PlantaController::class);
Route::get('/', [PlantaController::class, 'index']);