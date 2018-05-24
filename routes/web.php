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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Forecast routes for users
Route::get('/forecasts', 'ForecastController@index'); 

// Results routes for users and admin
// Route::get('/results', 'GameController@index');
Route::get('/games', 'GameController@index');
Route::post('/games', 'GameController@store');
    // ->middleware('is_admin')    
    // ->name('admin');

// Teams routes for admin
Route::get('/team', 'TeamController@index');
Route::post('/team', 'TeamController@store');

// Events routes for admin
Route::get('/events', 'EventController@index');
Route::post('/events', 'EventController@store');


    


