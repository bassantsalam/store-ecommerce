<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//namespace mkam el controller l fe g]file gwah da name space4
//prefix ely baktbo fe browser mmkn aktbo fe route seves provider (3la kol file ) lw hna yb2a 3la groupe bs
Route::group(['namespace'=>'Dashboard','middleware'=>'auth:admin'],function(){

    Route::get('/','DashboardController@index')->name('admin.dashboard');//first page if auth

});

Route::group(['namespace'=>'Dashboard','middleware'=>'guest:admin'],function(){

Route::get('login','LoginController@login')->name('admin.login');
Route::post('login','LoginController@postLogin')->name('admin.post.login');

});
