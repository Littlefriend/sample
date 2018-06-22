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

Route::get('/', 'StaticPagesController@cover');
Route::get('/home', 'StaticPagesController@home');
Route::get('/about', 'StaticPagesController@about');
Route::get('/product', 'StaticPagesController@product');
Route::get('/trend', 'StaticPagesController@trend');
Route::get('/contact', 'StaticPagesController@contact');

Route::get('/product/{param?}/{param2?}/{param3?}', 'StaticPagesController@product');
