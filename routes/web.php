<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout.home');
});

Route::get('login/', function () {
    return view('auth.login');
});

Route::get('pelaporan/', function () {
    return view('pelaporan');
});

Route::get('dashboard/', function () {
    return view('dashboarduser.dashboard');
});

Route::get('dashboard/profile', function () {
    return view('profile');
});
