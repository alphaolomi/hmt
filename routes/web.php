<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Route::domain('{tenant}.mumbo24.tech')->group(function () {
//     Route::get('users', function ($tenant) {
//         return App\Tenant\Models\User::all();
//     });
// });
