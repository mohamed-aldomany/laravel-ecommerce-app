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


/* admin page url */

/* product control */
Route::get('admin/addProduct','ProductController@create');
Route::post('admin/prodSave','ProductController@store');
Route::get('admin/allProduct','ProductController@index');
Route::get('admin/editProduct/{id}','ProductController@edit');
Route::post('admin/editProduct','ProductController@update');
Route::post('admin/uploadImage/{id}','ProductController@imageUpdate'); // image upload path

/* category control */
Route::get('admin/addCat','CategoryController@create');
Route::post('admin/catSave','CategoryController@store');
Route::get('admin/allCat','CategoryController@index');
Route::get('admin/editCat/{id}','CategoryController@edit');
Route::post('admin/editCat','CategoryController@update');

/******************************************************************** */



/* front page url */

Route::get('front/prod','FrontController@indexprod');
Route::get('front/cat','FrontController@indexcat');
Route::get('front/cat/{id}','FrontController@catprod');
Route::get('search','FrontController@search');
Route::post('/addCart/{id}','FrontController@addCart');
Route::get('/front/cart','FrontController@cart');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
