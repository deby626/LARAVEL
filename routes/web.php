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

Route::get('web/index.html', function () {
    return view('profil');
});


Route::get('/selections','SelectionsController@index');
Route::get('/selections/create','SelectionsController@create');
Route::get('/selections/{selections}','SelectionsController@show');
Route::post('/selections','SelectionsController@store');
route::delete('/selections/{selections}','SelectionsController@destroy');
route::get('/selections/{selections}/edit','SelectionsController@edit');
route::patch('/selections/{selections}','SelectionsController@update');