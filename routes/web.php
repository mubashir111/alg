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

Route::get('/', 'PageController@index');
Route::get('/about-us', 'PageController@about');
Route::get('/careers', 'PageController@careers');
Route::get('/services', 'PageController@services');
Route::get('/news', 'PageController@news');
Route::get('/news/{slug}', 'PageController@newsContent');
Route::get('/leadership', 'PageController@leadership');
Route::get('/gssa', 'PageController@gssa');
Route::get('/global-network', 'PageController@globalNetwork');
Route::get('/privacy-policy', 'PageController@privacyPolicy');
Route::get('/cookie-policy', 'PageController@cookiePolicy');
