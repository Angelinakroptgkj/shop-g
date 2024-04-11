<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index')->name('index');
});
Route::view('/', 'index')->name('index');
Route::view('/user1', 'user')->name('user');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// СТРАНИЦЫ
Route::view('/Home', 'layout.home')->name('home');
Route::view('/Shop', 'layout.shop')->name('shop');
Route::view('/Plant Care', 'layout.PlantCare')->name('PlantCare');
Route::view('/Blogs', 'layout.blogs')->name('blogs');
