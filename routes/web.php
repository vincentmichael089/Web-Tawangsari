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

Route::get('/', 'PagesController@index');

Route::get('/berita', 'PagesController@berita');

Route::get('/potensi', 'PagesController@potensi');

Route::get('/login', 'PagesController@login');


Route::resource('posts','PostsController');

Route::resource('coordinates','CoordinatesController');


