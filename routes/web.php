<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'PagesController@landing');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::domain('{tenant}.mumbo24.tech')->group(function () {
//     Route::view('/', 'welcome');
//     // Auth::routes();
//     Route::get('/home', 'HomeController@index')->name('home');

// });
