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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/', 'PostsController@index');
Route::resource('posts', 'PostsController');

Route::group(['middleware' => 'auth', 'namespace' => 'Backend', 'prefix' => 'backend'], function() {
   Route::resource('posts', 'PostsController'); 
});