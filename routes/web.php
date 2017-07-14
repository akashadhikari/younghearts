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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/circle', 'HomeController@getCircle')->name('circle');
Route::get('/search', 'SearchController@index')->name('search');
Route::get('/{username}', 'ProfileController@getProfile');
Route::get('/edit', 'ProfileController@getEdit');