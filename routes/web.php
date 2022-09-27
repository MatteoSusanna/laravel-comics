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
    return view('comics');
})->nome('comics');


Route::get('/characters', function () {
    return view('characters');
})->nome('characters');


Route::get('/movies', function () {
    return view('movies');
})->nome('movies');


Route::get('/tv', function () {
    return view('tv');
})->nome('tv');


Route::get('/games', function () {
    return view('games');
})->nome('games');


Route::get('/collectibles', function () {
    return view('collectibles');
})->nome('collectibles');


Route::get('/fans', function () {
    return view('fans');
})->nome('fans');


Route::get('/news', function () {
    return view('news');
})->nome('news');


Route::get('/shop', function () {
    return view('shop');
})->nome('shop');


Route::get('/videos', function () {
    return view('videos');
})->nome('videos');

