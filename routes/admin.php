<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' > 'auth:admin'], function () {
            Route::get('/','DashboardController@index')->name('admin.dashboard'); //the first page Admin visit after login

        });//Routes after login

        Route::group(['namespace' => 'Admin', 'prefix' => 'admin' , 'middleware' > 'guest:admin'], function () {

            Route::get('login', 'LoginController@login')->name('admin.login');
            Route::post('login', 'LoginController@postLogin')->name('admin.post.login');

        });//Routes before login
    }
);
