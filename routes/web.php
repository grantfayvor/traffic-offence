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

Route::get('/', 'MainController@index');
Route::get('/offence', 'MainController@offences');
Route::post('/offence', 'RoadSafetyController@create');
Route::post('/crime', 'CrimeController@create');
Route::get('/crime', 'MainController@view_offence');
Route::get('/crime/{id}', 'MainController@view_particular_offence');