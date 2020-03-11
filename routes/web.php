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

//Route::get('/confirm/{id}/{token}','Auth\RegisterController@confirm');

Route::group(['prefix' => '{locale}'], function() {

    Route::get('/', function () {
        return redirect(app()->getLocale());
    });

    Auth::routes();
    Route::get('/confirm/{id}/{token}','Auth\RegisterController@confirm');
    Route::get('/home', 'HomeController@index')->name('home');
});