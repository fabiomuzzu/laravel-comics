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
// compact è ciò che passo al file
// name contiene il nome da inserire nella route
Route::get('/characters', function () {
    $character= 'Sezione dei characters...';
    return view('characters',compact('character'));
})->name('characters');

Route::get('/cardDetails/{info}', function ($info) {
    $comics = config('comics');

    $comic = null;
    foreach ($comics as $item) {
        if ($item['id'] == $info) {
            $comic = $item;
        }
    };

    return view('singleComics', compact('comic'));
})->name('detail_card');


