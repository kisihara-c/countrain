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

Route::get('/countrain/', function () {
    return view('index');
});

Route::get('/countrain/first-1/', function () {
    return view('first-1');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/countrain/ct-main/', 'TrainController@getAuth');
Route::post('/countrain/ct-main/', 'TrainController@postAuth');

Route::get('/countrain/logout/', 'TrainController@logout');
