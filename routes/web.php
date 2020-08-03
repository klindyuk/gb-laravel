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

Route::get('/category', 'CategoryController@index') -> name('category');

Route::get('/category/{id}', 'CategoryController@show') -> name('category.show');

Route::get('/news/create', 'NewsController@create') -> name('news.create');

Route::get('/news/{id}', 'NewsController@show') -> name('news.show');

Route::get('/news/edit/{id}', 'NewsController@edit') -> name('news.edit');