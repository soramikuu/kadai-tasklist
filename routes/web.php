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

Route::get('/', 'TasksController@index');

Route::resource('tasks','TasksController'); //第一引数はtasklistデータベースの中のtasksテーブルを指定

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\LoginContolloer@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginContolloer@login')->name('login.post');
Route::get('logout', 'Auth\LoginContolloer@logout')->name('logout.get');