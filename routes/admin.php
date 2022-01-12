<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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
            Route::get('logout','LoginController@logout')->name('admin.logout'); // logout
            //categories
            Route::resource('Categories', 'CategoryController')->except('show');
            Route::get('delete/{id}', 'CategoryController@delete')->name('admin.categories.delete');     
            //categories

            

        });//Routes after login

        Route::group(['namespace' => 'Admin', 'prefix' => 'admin' , 'middleware' > 'guest:admin'], function () {

            Route::get('login', 'LoginController@login')->name('admin.login');
            Route::post('login', 'LoginController@postLogin')->name('admin.post.login');

        });//Routes before login
    }
);
