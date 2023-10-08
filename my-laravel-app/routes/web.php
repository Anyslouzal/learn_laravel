<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home/{num}/{email}', function ($num, $email) {
    return 'num' . $num . 'email' . $email;
});

Route::get('/home/{name}/{desc?}', function ($name, $desc = null) {
    return 'num' . $name . 'desc' . $desc;
});

