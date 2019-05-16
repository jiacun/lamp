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
        <script type="text/javascript" src="/ad/lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="/ad/js/xadmin.js"></script>
        <script type="text/javascript" src="/js/jquery.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row">
                <form class="layui-form">
                    <div class="layui-form-item">
                        <label for="L_email" class="layui-form-label">
                            <span class="x-red">*</span>用户名</label>
                        <div class="layui-input-inline">
                            <input type="text" id="L_email" name="user" required=""  autocomplete="off" class="layui-input" placeholder="字母开头,5-16位,无特殊符号"></div>
                        <div class="layui-form-mid layui-word-aux">
                            <span>必填</span>
                        </div></div>
                    <div class="layui-form-item">
                        <label for="L_username" class="layui-form-label">
                            <span class="x-red">*</span>手机</label>
                        <div class="layui-input-inline">
                            <input type="text" id="L_username" name="phone" placeholder="请填写真实手机号" required="" lay-verify="nikename" autocomplete="off" class="layui-input"></div>
                            <div class="layui-form-mid layui-word-aux">
                            <span>必填</span>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label for="L_pass" class="layui-form-label">
                            <span class="x-red">*</span>密码</label>
                        <div class="layui-input-inline">
                            <input type="password" id="L_pass" name="pwd" required="" placeholder="6~18位" lay-verify="pass" autocomplete="off" class="layui-input"></div>
                        <div class="layui-form-mid layui-word-aux">
                            <span>只能包含字母、数字和下划线</span>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label for="L_repass" class="layui-form-label">
                            <span class="x-red">*</span>确认密码</label>
                        <div class="layui-input-inline">
                            <input type="password" id="L_repass" name="pwd2" required="" placeholder="两次密码需要一致" lay-verify="repass" autocomplete="off" class="layui-input"></div>
                            <div class="layui-form-mid layui-word-aux">
                            <span>必填</span>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label for="L_pass" class="layui-form-label">
                            <span class="x-red">*</span>级别</label>
                        <div class="layui-input-inline">
                            <select name='auth'>
                                
                                <option value='2'>商品管理员</option>
                                <option value='1'>管理员</option>
                                <option value='4'>售后人员</option>
                                <option value='3' selected>普通会员</option>
                            </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux"><span class="x-red">*</span>默认普通会员</div>
                    </div>
                    <div class="layui-form-item">
                        <label for="L_repass" class="layui-form-label"></label>
                        <button class="layui-btn" lay-submit="">增加</button></div>
                </form>
            </div>
        </div>
        <script>
            layui.use(['form'],function(){});
            alert($);
        </script>
    </body>

</html>