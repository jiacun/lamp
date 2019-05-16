<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>欢迎页面-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="/ad/css/font.css">
        <link rel="stylesheet" href="/ad/css/xadmin.css">
        <script src="/ad/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/ad/js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body ">
                            <blockquote class="layui-elem-quote">欢迎管理员：
                                <span class="x-red">test</span>！当前时间:<span>@php
                                    echo date('Y-m-d H:i:s');
                                @endphp</span>
                                
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md12">
                   
                </div>
                </div>
                
                </div>
               
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">系统信息</div>
                        <div class="layui-card-body ">
                            <table class="layui-table">
                                <tbody>
                                    <tr>
                                        <th>版本</th>
                                        <td>测试版</td></tr>
                                    <tr>
                                        <th>服务器地址</th>
                                        <td>{{ $arr['ip'] }}</td></tr>
                                    <tr>
                                        <th>操作系统</th>
                                        <td>{{ $arr['os'] }}</td></tr>
                                    <tr>
                                        <th>运行环境</th>
                                        <td>{{ $arr['environment'] }}</td></tr>
                                    <tr>
                                        <th>PHP版本</th>
                                        <td>{{ $arr['versions'] }}</td></tr>
                                    <tr>
                                        <th>PHP运行方式</th>
                                        <td>{{ $arr['operation'] }}</td></tr>
                                    <tr>
                                        <th>MYSQL版本</th>
                                        <td>5.5.53</td></tr>
                                    <tr>
                                        <th>Laravel</th>
                                        <td>{{ $arr['laravelver'] }}</td></tr>
                                    <tr>
                                        <th>表单上传附件限制</th>
                                        <td>{{ $arr['formmax'] }}</td></tr>
                                    <tr>
                                    <tr>
                                        <th>服务器上传附件限制</th>
                                        <td>{{ $arr['servermax'] }}</td></tr>
                                    <tr>
                                        <th>执行时间限制</th>
                                        <td>30s</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">开发团队</div>
                        <div class="layui-card-body ">
                            <table class="layui-table">
                                <tbody>
                                    <tr>
                                        <th>版权所有</th>
                                        <td>XDL 214 星星星星
                                            <a href="" >访问官网</a></td>
                                    </tr>
                                    <tr>
                                        <th>开发者</th>
                                        <td>DZH</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <style id="welcome_style"></style>
                <div class="layui-col-md12">
                    <blockquote class="layui-elem-quote layui-quote-nm">感谢佳材哥哥对我们的帮助与支持!</blockquote></div>
            </div>
        </div>
        </div>
    </body>
</html>