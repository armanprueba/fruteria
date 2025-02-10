<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutaController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('Frutas', FrutaController::class);


