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
    $data = [
        'comics' => config('db.comics'),
        'links' => config('db.links'),
        'merhandises' => config('db.merhandises'),
        'socials' => config('db.socials')
    ];
    return view('home', $data);
})->name('home');

Route::get('/comics/{id}', function ($id) {

    $data = [
        'comics' => config('db.comics'),
        'links' => config('db.links'),
        'merhandises' => config('db.merhandises'),
        'socials' => config('db.socials')
    ];
    $comics = config('db.comics');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'), $data);
    } else {
        abort('404');
    }

})->name('comics.show');

Route::get('/comics', function(){
    return redirect()->route('home');
});



