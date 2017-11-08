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

Route::get('/', 'PagesController@welcome');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');

Route::get('/subjects', 'PagesController@subjects');
Route::get('/profile', 'PagesController@profile');

Route::get('/english', 'ModsController@english');
Route::get('/maths', 'ModsController@maths');
Route::get('/computerscience', 'ModsController@computerscience');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('mods','ModsController');

Route::resource('topics','TopicsController');

Route::get('/display', 'TopicsController@display');