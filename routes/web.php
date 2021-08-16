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


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/produto', function () {
    return view('home');
})->name('produto');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');


Route::get('/representante', function () {
    return view('representante');
})->name('representante');

Route::get('/teste', function () {
    return view('layouts.site');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
