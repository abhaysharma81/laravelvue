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

Route::get('/','AxiosController@index');
Route::post('/storedatas','AxiosController@store');
Route::get('/smooth',function(){
	return view('smooth');
});
Route::get('/routes',function(){
	return view('routes');
});
Route::resource('category','CategoryController');
Route::get('category','CategoryController@index');
Route::post('/category','CategoryController@store');
Route::get('categoryshow','CategoryController@show');
Route::get('deletecategory/{id}','CategoryController@destroy');
Route::get('editcategory/{id}','CategoryController@edit');
Route::post('/updatecategory/{id}','CategoryController@update');

//message
Route::get('message','MessageController@index');
Route::get('messageshow','MessageController@show');
Route::post('/messagestore','MessageController@store');
Route::get('messagedel','MessageController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
