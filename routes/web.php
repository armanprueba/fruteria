<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutaController;

Route::get('/', function () {
   
});


Route::resource('Frutas', FrutaController::class);


