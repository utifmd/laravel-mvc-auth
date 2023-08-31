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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
});

Route::controller(\App\Http\Controllers\UserController::class)->group(function (){
    Route::get('/login', 'viewLogin');
    Route::post('/login', 'onLogin');
    Route::post('/logout', 'onLogout');
});
