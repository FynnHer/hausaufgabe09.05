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

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/registered', [App\Http\Controllers\beispiel::class, 'register']);

Route::post('/angemeldet', [\App\Http\Controllers\beispiel::class, 'angemeldet']);

Route::post('/abgegeben', [\App\Http\Controllers\beispiel::class, 'abgegeben']);

Route::get('/post', function () {
    return view('post');
});
