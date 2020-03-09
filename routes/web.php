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
*/;

Auth::routes();

/*
Route::get('test', 'TestController@index');
Route::get('test/search', 'TestController@search');
Route::get('test/detail', 'TestController@detail');
Route::get('test/form', 'TestController@form');
Route::get('test/confirm', 'TestController@confilm');
Route::get('test/done', 'TestController@done');
Route::get('test/member', 'TestController@member');
Route::get('test/memberedit', 'TestController@memberedit');
Route::get('test/signin', 'TestController@signin');
Route::get('test/signupform', 'TestController@signupform');
Route::get('test/signupconfilm', 'TestController@signupconfilm');
Route::get('test/signupdone', 'TestController@signupdone');
*/


Route::get('/', 'IndexController@index');
Route::get('index', 'IndexController@index');
Route::get('framework/detail', 'FrameworkController@detail');

// 管理画面
Route::get('/dashboard/index', 'DashboardController@index');
Route::get('/dashboard/post', 'DashboardController@post');
Route::get('/dashboard/profile', 'DashboardController@profile');

Auth::routes();


Route::get('search', 'SearchController@search');
Route::get('framework/form', 'FrameworkController@form');
Route::post('framework/confirm', 'FrameworkController@confirm');
Route::post('framework/done', 'FrameworkController@done');





