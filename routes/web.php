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
Route::post('/nzdata', 'website\SiteController@nzRegionCity')->name('region');

// NZ Advertise Exp
Route::post('/nzadvexp1', 'website\SiteController@nzAdvExp1')->name('region.nz.adv.exp1');
Route::post('/nzadvexp2', 'website\SiteController@nzAdvExp2')->name('region.nz.adv.exp2');
Route::post('/nzadvexp3', 'website\SiteController@nzAdvExp3')->name('region.nz.adv.exp3');

// NZ Market Exp
Route::post('/nzmarketexp1', 'website\SiteController@nzMarketExp1')->name('region.nz.mrkt.exp1');
Route::post('/nzmarketexp2', 'website\SiteController@nzMarketExp2')->name('region.nz.mrkt.exp2');
Route::post('/nzmarketexp3', 'website\SiteController@nzMarketExp3')->name('region.nz.mrkt.exp3');

// NZ Sector Exp
Route::post('/nzsecexp1', 'website\SiteController@nzSectorExp1')->name('region.nz.sector.exp1');
Route::post('/nzsecexp2', 'website\SiteController@nzSectorExp2')->name('region.nz.sector.exp2');
Route::post('/nzsecexp3', 'website\SiteController@nzSectorExp3')->name('region.nz.sector.exp3');

// NZ Exp Year
Route::post('/nzexpyear', 'website\SiteController@nzExpYear')->name('region.nz.exp.year');





Route::post('/ovdata', 'website\SiteController@overseasRegionData')->name('region.overseas');
Route::post('/ovcity', 'website\SiteController@overseasCity')->name('overseas.city');

// OV Advertise Exp
Route::post('/ovadvexp1', 'website\SiteController@ovAdvExp1')->name('region.ov.adv.exp1');
Route::post('/ovadvexp2', 'website\SiteController@ovAdvExp2')->name('region.ov.adv.exp2');












Route::post('/result', 'website\ResultController@findResult')->name('result');
// nps
Route::post('/nps', 'website\ResultController@selectNps')->name('nps');
Route::get('/nps-date', 'website\ResultController@slectNpsDate')->name('nps.date');


Auth::routes(['register' => false]);


