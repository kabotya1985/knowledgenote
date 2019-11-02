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
Route::get('/', function ()  { return view('Welcome'); });

{ Route::get('test', 'TestController@index'); };

{ Route::get('test/search', 'TestController@search'); };

{ Route::get('test/detail', 'TestController@detail'); };

{ Route::get('test/form', 'TestController@form'); };

{ Route::get('test/confirm', 'TestController@confilm'); };

{ Route::get('test/done', 'TestController@done'); };

{ Route::get('test/member', 'TestController@member'); };

{ Route::get('test/memberedit', 'TestController@memberedit'); };

{ Route::get('test/signin', 'TestController@signin'); };

{ Route::get('test/signupform', 'TestController@signupform'); };

{ Route::get('test/signupconfilm', 'TestController@signupconfilm'); };

{ Route::get('test/signupdone', 'TestController@signupdone'); };




{ Route::get('index', 'IndexController@index'); };

{ Route::get('search', 'SearchController@search'); };

{ Route::get('framework/detail', 'FrameworkController@detail'); };

{ Route::get('framework/form', 'FrameworkController@form'); };

{ Route::post('framework/confirm', 'FrameworkController@confirm'); };

{ Route::post('framework/done', 'FrameworkController@done'); };

{ Route::get('member/index', 'MemberController@index'); };

{ Route::get('member/edit', 'MemberController@edit'); };

{ Route::get('signin/form', 'Auth\SigninController@form')->name('home'); };
{ Route::post('signin/form', 'Auth\SigninController@form')->name('home'); };

{ Route::get('signup/form', 'SignupController@form'); };

{ Route::post('signup/confirm', 'SignupController@confirm'); };

{ Route::post('signup/done', 'SignupController@done'); };



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

{ Route::get('login', 'Auth\RegisterController@showRegistrationForm')->name('register'); };
{ Route::post('login', 'Auth\RegisterController@register'); };

