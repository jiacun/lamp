<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
	/**
	 * 后台首页
	 * @return [type] [description]
	 */
    public function index()
    {
    	return view('Admin.index');
    }

    /**
     * 我的桌面模板
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function welcome(Request $request)
    {
    	//ip
    	$arr['ip']=($request->ip());
    	//操作系统
    	$arr['os']=PHP_OS;
    	//运行环境
    	$arr['environment']=$_SERVER["SERVER_SOFTWARE"];
    	//php版本
    	$arr['versions']=PHP_VERSION;
    	//运行模式
    	$arr['operation']=php_sapi_name();
    	//表单上传最大值
    	$arr['formmax']=ini_get('post_max_size');
    	//服务器允许最
    	$arr['servermax']=ini_get('upload_max_filesize');
    	//laravel版本
    	$laravel = app();
    	$arr['laravelver']=$laravel::VERSION;
    	//返回模板
    	return view('Admin.welcome',['arr'=>$arr]);
    }
}
