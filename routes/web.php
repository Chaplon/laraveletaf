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
    return view('welcome');
});

Route::get('/client', function () {
    return view('layouts.client');
});

Route::get('/affaires', function () {
    return view('layouts.affaires');
});

Route::get('/processus', function () {
    return view('layouts.processus');
});

Route::get('/acces', function () {
    return view('layouts.acces');
});

Route::get('/profil', function () {
    return view('layouts.profil');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
