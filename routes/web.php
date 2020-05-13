<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::domain('{tenant}.mumbo24.tech')->group(function () {
    Route::get('users', function ($tenant) {
        return App\Customer\Models\User::all();
    });
});


Route::get('users', function () {
    return App\Customer\Models\User::all();
});
