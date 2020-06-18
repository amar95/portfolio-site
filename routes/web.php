<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');
Route::prefix('prev')->group(function () {

    Route::view('/resume', 'prev.resume');
});
Route::view('/resume', 'prev.resume');
Route::view('/projects', 'projects');
Route::view('/mobile', 'mobile');
Route::view('/me', 'me');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');