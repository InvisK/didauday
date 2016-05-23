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
    return view('home.index');
});

Route::get('temp', function () {
    return view('template.main');
});

Route::get('home',['uses' => 'PromotionNewsController@getList']);
Route::get('detail/{id}',['uses' => 'PromotionNewsController@getDetail']);

Route::get('profile', function () {
    return view('profile.provider');
});
Route::get('login',['as'=>'facebook.login','uses'=>'FacebookController@login']);
Route::get('callback',['as'=>'facebook.callback','uses'=>'FacebookController@callback']);
Route::get('logout',['as'=>'facebook.logout','uses'=>'FacebookController@logout']);
