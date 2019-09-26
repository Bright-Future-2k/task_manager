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
Route::prefix('customer')->group(function (){
    Route::get('index','customerController@index');

    Route::get('create','customerController@create');

    Route::get('store','customerController@restore');

    Route::post('output_restore','customerController@store');



    Route::get('{id}/show',function (){

    });
    Route::get('{id}/edit',function (){

    });
    Route::patch('{id}/update',function (){

    });
    Route::delete('{id}',function (){

    });
});
