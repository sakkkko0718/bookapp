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


Route::get('/', function () {
    return view('welcome');
});

Route::get('books','BookController@index');
Route::post('books','BookController@post');

Route::get('books/add','BookController@add');
Route::post('books/add','BookController@create');

Route::get('books/edit', 'BookController@edit');
Route::post('books/edit', 'BookController@update');

Route::get('books/del', 'BookController@del');
Route::post('books/del', 'BookController@remove');

Route::get('books/search', 'BookController@search');