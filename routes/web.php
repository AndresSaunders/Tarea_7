<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Materias', function () {
    return view('Materias.index');
});

Route::get('/Materias/crear', function () {   
    return view('Materias.crear');
});

Route::resource('Materias',MateriasController::class);