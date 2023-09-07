<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\{OnlyGuestMiddleware, OnlyMemberMiddleware};
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

Route::get('/', [HomeController::class, 'viewHome']);
Route::get('/todo-list', [HomeController::class, 'viewTodoList']);
Route::get('/conditional-view', [HomeController::class, 'viewConditional']);

Route::get('/template', function () {
    return view('template');
});

Route::controller(UserController::class)->group(function (){
    Route::get('/login', 'viewLogin')->middleware([OnlyGuestMiddleware::class]);
    Route::post('/login', 'onLogin')->middleware([OnlyGuestMiddleware::class]);
    Route::post('/logout', 'onLogout')->middleware([OnlyMemberMiddleware::class]);
});
