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

Route::group(['namespace'=>'Client'],function(){
    Route::get('/home','shopController@showHome')->name('vHome');
    Route::get('/about','shopController@showAbout')->name('vAbout');
    Route::get('/blog','shopController@showBlog')->name('vBlog');
    Route::get('/contact','shopController@showContact')->name('vContact');
    Route::get('/feature','shopController@showFeature')->name('vFeature');
    Route::get('/shop','shopController@showShop')->name('vShop');
    Route::get("/productDetail", "shopController@showProductDetail")->name("vProductDetail");
});