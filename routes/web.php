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
    return view('home');
})->nome('home');


Route::get('/characters', function () {
    return 'characters';
})->nome('characters');


Route::get('/comics', function () {
    return 'comics';
})->nome('comics');


Route::get('/movies', function () {
    return 'movies';
})->nome('movies');


Route::get('/tv', function () {
    return 'tv';
})->nome('tv');


Route::get('/games', function () {
    return 'games';
})->nome('games');


Route::get('/collectibles', function () {
    return 'collectibles';
})->nome('collectibles');


Route::get('/fans', function () {
    return 'fans';
})->nome('fans');


Route::get('/news', function () {
    return 'news';
})->nome('news');


Route::get('/shop', function () {
    return 'shop';
})->nome('shop');

