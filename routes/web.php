<?php

use App\Http\Controllers\PlantaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', [PlantaController::class, 'index'])->name('plantas.index');
Route::resource('plantas', PlantaController::class);