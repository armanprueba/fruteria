<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('index', LibroController::class)->only(['index']);
Route::resource('store', LibroController::class)->only(['store']);
Route::resource('update/{id?}', LibroController::class)->only(['update']);
Route::resource('destroy/{id?}', LibroController::class)->only(['destroy']);

