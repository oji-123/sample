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
Route::group(['prefix' => 'posts'], function(){
  Route::get( '/'   , 'PostController@index');
  Route::get( '/new', 'PostController@new');
  Route::post( '/', 'PostController@create');
});
