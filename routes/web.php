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

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'ForecastController@index')->middleware('auth');
// Forecast routes for users
Route::get('/forecasts', 'ForecastController@index')->middleware('auth');
Route::post('/forecasts/update/{id}', 'ForecastController@update')->middleware('auth'); 

// Results routes for users and admin
// Route::get('/results', 'GameController@index');
Route::get('/games', 'GameController@create')->middleware('is_admin')->name('admin');
Route::post('/games', 'GameController@store')->middleware('is_admin')->name('admin');
// Result routes for admins and users
Route::get('/results', 'GameController@index')->middleware('auth');
Route::post('/results/update/{id}', 'GameController@update')->middleware('auth'); 


   

// Teams routes for admin
Route::get('/team', 'TeamController@index')->middleware('is_admin')->name('admin');
Route::post('/team', 'TeamController@store')->middleware('is_admin')->name('admin');

// Events routes for admin
Route::get('/events', 'EventController@index')->middleware('is_admin')->name('admin');
Route::post('/events', 'EventController@store')->middleware('is_admin')->name('admin');

// Player top 
Route::get('/top', 'PointCountController@index')->middleware('auth');



    


