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
//首页模板
Route::get('/', function () {
    return view('Home.index');
});

//前台
Route::group([], function(){
	

});

//后台模块
Route::group([], function(){
	//后台路由主页
	Route::get('/admin','Admin\IndexController@index');
	//我的桌面路由
	Route::get('/admin/welcome','Admin\IndexController@welcome');
	//用户操作增删改查
	Route::resource('/admin/user','Admin\UserController');

});


// Route::get('/admin/memberlist','Admin\IndexController@memberlist');
// Route::get('/admin/memberadd','Admin\IndexController@memberadd');

