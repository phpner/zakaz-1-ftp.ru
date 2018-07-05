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

Route::get('/mebel', 'IndexController@index');

Auth::routes();


Route::get('/mebel/admin', 'AdminController@index')->name('admin');

Route::get('/mebel/add_page', 'AdminController@add_page_get')->name('add_page');

Route::post('/mebel/add_page', 'AdminController@add_page_post')->name('add_page_post');

Route::get('/mebel/del/{id}', 'AdminController@del_page_post')->name('del_page_post');

Route::get('/mebel/edit/{id}', 'AdminController@edit_page_post')->name('edit_page_post');

Route::post('/mebel/update/{id}', 'AdminController@update_page_post')->name('update_page_post');

