<?php

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


Route::prefix('{lang}')->group(function () {
        Route::get('/destinations', "DestinationController@index");
    Route::get('/destinations/{destination}', "DestinationController@show");
});

Auth::routes();
Route::get('/booking/destination/{destination}', "BookingController@create");
Route::post('/booking', "BookingController@store");
Route::get('/dashboard', "BookingController@index");
Route::get('/home', 'BookingController@userPage')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
