<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/jobs/create', 'JobController@create');

Route::get('/jobs/{job}/edit', 'JobController@edit');
Route::delete('/jobs/{job}', 'JobController@destroy');
Route::patch('/jobs/{job}', 'JobController@update');
Route::get('/jobs/{job}', 'JobController@show');

Route::get('/jobs', 'JobController@index');
Route::post('/jobs', 'JobController@store');

Auth::routes();