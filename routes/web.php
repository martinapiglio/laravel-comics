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
    // config() used to access comics.php file in config directory
    $comics = config('comics');
    //header links
    $links = [
        'characters' => 'characters',
        'comics' => 'comics',
        'movies' => 'movies',
        'tv' => 'tv',
        'games' => 'games',
        'collectibles' => 'collectibles',
        'videos' => 'videos',
        'fans' => 'fans',
        'news' => 'news',
        'shop' => 'shop'
    ];

    return view('home', compact('comics', 'links'));
})->name('home');
