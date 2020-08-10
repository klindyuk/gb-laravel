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

Route::get('/admin/news/create', 'Admin\NewsController@create') -> name('admin.news.create');

Route::get('/comments/create', 'CommentsController@create') -> name('comments.create');

Route::post('news/store', 'Admin\NewsController@store') -> name('admin.news.store');

Route::post('comments/store', 'CommentsController@store') -> name('comments.store');

Route::get('/news/{id}', 'NewsController@show') -> name('news.show');

Route::get('/admin/news/edit/{id}', 'Admin\NewsController@edit') -> name('admin.news.edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
