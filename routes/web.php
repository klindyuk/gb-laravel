<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@index') -> name('index');

Route::get('/category/{category}', 'CategoryController@show') -> name('category');

Route::get('/comments/create', 'CommentsController@create') -> name('comments.create');

Route::post('comments/store', 'CommentsController@store') -> name('comments.store');

Route::get('/news/{id}', 'NewsController@show') -> name('news');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/account', 'Account\IndexController@index') -> name('account');

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
        Route::get('/', 'Admin\HomeController@index') -> name('admin.index');

        Route::resource('/news', 'Admin\NewsController');

        Route::resource('/category', 'Admin\CategoryController');

        Route::resource('/user', 'Admin\UserController');
    });



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
