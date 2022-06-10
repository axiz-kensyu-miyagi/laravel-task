<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index');
});

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/update', function () {
    return view('update');
});

Route::post('/calendar', function () {
    return view('calendar');
});
