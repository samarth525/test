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

Route::get('/index', function () {
    return "hello world";
});

Route::get('/test', function () {
    return "hello test";
});

Route::get('/test2', function () {
    return "hello test";
});
Route::get('/test23', function () {
    return "hello test";
});
Route::get('/test24', function () {
    return "hello test";
});

Route::get('/test26', function () {
    return "hello test";
});

Route::get('/test27', function () {
    return "hello test";
});

Route::get('/test28', function () {
    return "hello test";
});

Route::get('/test29', function () {
    return "hello test";
});
Route::get('/test30', function () {
    return "hello test";
});
Route::get('/test31', function () {
    return "hello test";
});
