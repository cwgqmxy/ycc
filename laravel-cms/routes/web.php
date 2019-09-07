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
//获取所有提交方法
Route::any('consoles/login','Consoles\LoginController@login');
// 验证码
Route::get('consoles/code','Consoles\LoginController@code');
//后台首页
Route::any('consoles/index','Consoles\IndexController@index');
Route::any('consoles/welcome','Consoles\WelcomeController@welcome');
