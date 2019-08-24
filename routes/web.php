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
Route::get('/','PagesController@index');
Route::resource('/posts' , 'PostsController');
Route::get('/api/tags' , 'PagesController@tags');
Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');
