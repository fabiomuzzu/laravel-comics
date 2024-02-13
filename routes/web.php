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
    $comics = config('comics');
    $blueBanner = config('sub-banner');
    return view('home',compact('comics','blueBanner'));
})->name('homepage');

// /characters è l'url
// view contiene il nome del file
// name contiene il nome da inserire nella route
Route::get('/characters', function () {
    $character= 'Sezione dei characters...';
    return view('characters',compact('character'));
})->name('characters');

Route::get('/cardDetails/{info}', function ($info) {
    dd($info);
})->name('detail_card');


