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


Route::get('/', 'Frontend\HomeController@index');
// Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// users
Route::get('/users', 'UsersController@index')->name('profile');
Route::get('/users/create-new', 'UsersController@create_page')->name('create');

// tags
Route::get('/tags', 'TagsController@index')->name('index');
Route::get('/tags/create-new', 'TagsController@create_page')->name('create');
Route::post('/tags/create-new', 'TagsController@save_page')->name('create');
Route::get('/tags/update/{tag}', 'TagsController@update_page')->name('edit');

// Quotes
Route::get('/quotes', 'QuotesController@index')->name('index');
Route::get('/quotes/create-new', 'QuotesController@create_page')->name('create');
Route::post('/quotes/create-new', 'QuotesController@save_page')->name('create');
Route::get('/quotes/update/{quote}', 'QuotesController@update_page')->name('edit');
Route::post('/quotes/update/{quote}', 'QuotesController@update_save')->name('update');
Route::get('/quotes/show/{slug}', 'QuotesController@show')->name('create');

