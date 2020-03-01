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
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('admin', 'website\AdminController')->middleware('auth');

Route::get('/password', 'website\PasswordController@index')->name('password.index');
Route::post('/password/update', 'website\PasswordController@update')->name('password.update');


Route::get('/', 'website\SiteController@index')->name('website.index');
Route::post('/nzdata', 'website\SiteController@nzRegionData')->name('region.nz');
Route::post('/ovdata', 'website\SiteController@overseasRegionData')->name('region.overseas');

Route::post('/result', 'website\ResultController@findResult')->name('result');
// nps
Route::post('/nps', 'website\ResultController@selectNps')->name('nps');
Route::get('/nps-date', 'website\ResultController@slectNpsDate')->name('nps.date');


Auth::routes(['register' => false]);


