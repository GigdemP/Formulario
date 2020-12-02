<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/verify', 'mulan@verify');
Route::get('/inicio', 'mulan@login');
