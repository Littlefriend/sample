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
Route::get('/product/business/ybj', 'StaticPagesController@bussiness_ybj');
Route::get('/product/business/wwj', 'StaticPagesController@bussiness_wwj');
Route::get('/product/business/hpj', 'StaticPagesController@bussiness_hpj');
Route::get('/product/business/kyj', 'StaticPagesController@bussiness_kyj');
Route::get('/product/business/hjj', 'StaticPagesController@bussiness_hjj');
Route::get('/product/business/qt', 'StaticPagesController@bussiness_qt');

Route::get('/product/business', 'StaticPagesController@business');
Route::get('/product/wedding', 'StaticPagesController@wedding');
Route::get('/product/birthday', 'StaticPagesController@birthday');
Route::get('/product/culture', 'StaticPagesController@culture');
Route::get('/product/price', 'StaticPagesController@price');

Route::get('/product/wedding/hhj', 'StaticPagesController@wedding_hhj');
Route::get('/product/wedding/klj', 'StaticPagesController@wedding_klj');
Route::get('/product/wedding/mmj', 'StaticPagesController@wedding_mmj');
Route::get('/product/wedding/txj', 'StaticPagesController@wedding_txj');
Route::get('/product/wedding/lyj', 'StaticPagesController@wedding_lyj');
Route::get('/product/wedding/xyj', 'StaticPagesController@wedding_xyj');
