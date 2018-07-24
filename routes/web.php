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

use Illuminate\Http\Request;

// use Auth;

Auth::routes();

Route::get('/', 'MainController@index')->middleware('auth');
Route::get('/offence', 'MainController@offences')->middleware('auth');
Route::post('/offence', 'RoadSafetyController@create')->middleware('auth', 'admin');
Route::post('/crime', 'CrimeController@create')->middleware('auth');
Route::get('/crime', 'MainController@view_offence')->middleware('auth');
Route::get('/crime/{id}', 'MainController@view_particular_offence')->middleware('auth');
Route::get('/search', 'CrimeController@search')->middleware('auth');