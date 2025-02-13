<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutaController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
   
});
Route::get('prueba', [PruebaController::class, 'create'])->middleware('
auth');
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::resource('Frutas', FrutaController::class);


