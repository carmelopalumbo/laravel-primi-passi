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

    $saluto = 'Hello World!';
    return view('home', compact('saluto'));
});

Route::get('/back-end-page', function () {
    $backendarg = ['php', 'database', 'mysql', 'laravel'];
    return view('backend', compact('backendarg'));
});

Route::get('/front-end-page', function () {

    $frontendarg = ['html', 'css', 'bootstrap', 'JavaScript', 'VueJS', 'Vite'];
    return view('frontend', compact('frontendarg'));
});
