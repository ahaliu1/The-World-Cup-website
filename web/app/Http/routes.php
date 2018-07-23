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

Route::group(['middleware' => ['web']], function () {
Route::any('news/index', ['uses' => 'NewsController@index']);
Route::any('news/info/{id}', ['uses' => 'NewsController@info']);
Route::any('news/shot', ['uses' => 'NewsController@shot']);
Route::any('news/score', ['uses' => 'NewsController@score']);
Route::any('news/schedule', ['uses' => 'NewsController@schedule']);
Route::any('news/team/{name}', ['uses' => 'NewsController@member']);
Route::any('news/player/{id}', ['uses' => 'NewsController@player']);
Route::any('news/comment', ['uses' => 'NewsController@data']);
Route::any('news/intro', ['uses' => 'NewsController@intro']);
});