<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'api/v1'], function(){
    //Route::resource('status','StatusController');
    Route::get('status/{id}',function($id){
        return $id;
    });
});

Route::auth();

Route::get('/home', 'HomeController@index');
