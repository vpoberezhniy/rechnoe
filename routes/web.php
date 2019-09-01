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

Route::get('/home', 'HomeController@index');
Route::get('/prtcl', 'PrtclController@index');
Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'role']],
    function(){
        Route::get('/', 'AdminController@dashboard');
        Route::resource('/user', 'UserController');
        Route::resource('/protocol', 'ProtocolController');
    });

Route::get('/', function(){  return view('home'); });





