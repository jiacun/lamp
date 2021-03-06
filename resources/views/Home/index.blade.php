﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="x-ua-compatible" content="IE=7,8,9">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>网页</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link href="/DBShop/public/upload/common/favicon.ico" rel="shortcut icon">
<link href="static/css/dbmall.css" rel="stylesheet">
<script type="text/javascript">
if (/MSIE 6/.test(navigator.userAgent)) {
	window.location = '/DBShop/public/support-browser.html';
}
</script>
<!--[if lte IE 8]>
<script src="static/js/html5.js"></script>
<![endif]-->
<script src="static/js/frontjs.js"></script>
</head>
<body id="dbshop-body">
<!--顶部-->
<div class="site-topbar" id="site-topbar">
    <div class="container">
        <div class="topbar-nav">
                    </div>
        <div class="topbar-info J_userInfo">
            <ul class="list-inline">
                        <li><a href="/DBShop/home">用户中心</a></li>
            <li><a href="/DBShop/home/order">我的订单</a></li>
                            <li><a href="/DBShop/user/login">登录</a></li>
                <li><a href="/DBShop/user/register">注册</a></li>
                                    </ul>
        </div>
    </div>
</div>
<!--头部-->
<div class="site-header">
    <div class="container">
        <div class="site-logo"> <a href="/DBShop/" class="logo"><img src="static/picture/shop_logo.png" style="height: 90px;"></a></div>
        <div class="header-info">
                        <div class="search-section">
                <form method="get" action="/DBShop/list/goodsSearch" class="search-form clearfix">
                    <input type="text" name="keywords" value="" placeholder="简简单单搜索" autocomplete="off" class="search-text">
                    <input type="submit" class="search-btn iconfont" value="">
                </form>
            </div>
            <div class="cart-section">
                <a href="/DBShop/cart" class="mini-cart" id="J_miniCart"><i class="iconfont"></i>购物车&nbsp;
                                                                    <span class="mini-cart-num J_cartNum" id="top_cart" style="display:none;">0</span>
                                    </a>
            </div>
        </div>
    </div>
    <div class="header_menu">
    <div class="container">
        <div class="header-nav clearfix">
            <div class="nav-category nav-category-toggled" id="J_categoryContainer"> <a href="" class="btn-category-list">商品分类</a>
                <div style="display: block;" class="nav-category-section">
                    <ul class="nav-category-list">
                                                        <li class="nav-category-item ">
                                                                            <div class="nav-category-content"> <a href="/DBShop/list/1" class="title">家用电器</a>
                                                                                            <div class="links">
                                                                                                            <a href="/DBShop/list/6">电视</a>
                                                                                                            <a href="/DBShop/list/7">空调</a>
                                                                                                            <a href="/DBShop/list/8">洗衣机</a>
                                                                                                            <a href="/DBShop/list/30">电冰箱</a>
                                                                                                    </div>
                                                                                    </div>
                                                                    </li>
                                                            <li class="nav-category-item ">
                                                                            <div class="nav-category-content"> <a href="/DBShop/list/2" class="title">手机数码</a>
                                                                                            <div class="links">
                                                                                                            <a href="/DBShop/list/17">智能设备</a>
                                                                                                            <a href="/DBShop/list/14">手机通讯</a>
                                                                                                            <a href="/DBShop/list/15">摄影摄像</a>
                                                                                                            <a href="/DBShop/list/16">数码配件</a>
                                                                                                    </div>
                                                                                    </div>
                                                                    </li>
                                                            <li class="nav-category-item ">
                                                                            <div class="nav-category-content"> <a href="/DBShop/list/4" class="title">母婴用品</a>
                                                                                            <div class="links">
                                                                                                            <a href="/DBShop/list/23">尿裤湿巾</a>
                                                                                                            <a href="/DBShop/list/24">喂养用品</a>
                                                                                                            <a href="/DBShop/list/25">洗护用品</a>
                                                                                                            <a href="/DBShop/list/22">营养辅食</a>
                                                                                                    </div>
                                                                                    </div>
                                                                    </li>
                                                            <li class="nav-category-item ">
                                                                            <div class="nav-category-content"> <a href="/DBShop/list/3" class="title">家居家具</a>
                                                                                            <div class="links">
                                                                                                            <a href="/DBShop/list/18">厨具</a>
                                                                                                            <a href="/DBShop/list/19">家纺</a>
                                                                                                            <a href="/DBShop/list/26">厨房卫浴</a>
                                                                                                            <a href="/DBShop/list/20">灯具</a>
                                                                                                            <a href="/DBShop/list/27">五金电工</a>
                                                                                                            <a href="/DBShop/list/21">家具</a>
                                                                                                    </div>
                                                                                    </div>
                                                                    </li>
                                                            <li class="nav-category-item ">
                                                                            <div class="nav-category-content"> <a href="/DBShop/list/29" class="title">图书文娱</a>
                                                                                    </div>
                                                                    </li>
                            
                                            </ul>
                </div>
            </div>
            <div class="nav-main">
                <ul class="nav-main-list J_menuNavMain clearfix">
                    <li class="nav-main-item">
                        <a href="/DBShop/"><span class="text">首页</span></a>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
<div class="row">
    <div class="col col-16 offset4">
        <div class="home-slider">
            <div class="xm-slider">
                <div class="xm-slider-container">
                    <div class="flexslider">
    <ul class="slides">
        
        <li>
            <a target="_blank" href=""><img src="static/picture/c188b5236e725a4e30155614caf3a977.jpg"></a>
        </li>
        
        <li>
            <a target="_blank" href=""><img src="static/picture/5ce862594eeaee6da9306b36f44fc216.png"></a>
        </li>
        
    </ul>
</div>                </div>
            </div>
        </div>
    </div>

        <div class="col">
        <div class="home-hd-show container">
            <div class="hd-show-item hd-show-item-first">
                <a target="_blank" href=""><img src="static/picture/e47207fd8e6f7e96333889a01a1ae465.jpg" border='0'/></a>            </div>
            <div class="hd-show-item ">
                <a target="_blank" href=""><img src="static/picture/d694b5e1465c251aec9e91d34daef81a.jpg" border='0'/></a>            </div>
            <div class="hd-show-item ">
                <a target="_blank" href=""><img src="static/picture/a541ab3587f177e135e5cb0b8e92f591.jpg" border='0'/></a>            </div>
            <div class="hd-show-item ">
                <a target="_blank" href=""><img src="static/picture/3c8365264b7f682ce7154f894a807ebd.jpg" border='0'/></a>            </div>
        </div>
    </div>
    </div>

<div id="floor_1" class="container row has-floor index_goods_list">
    <div class="col col-4 goods-left">
        <div>
                        <div class="heading">
                <h4 class="title">1F / 特价商品</h4>
            </div>
            <div class="drop-product"><a target="_blank" href=""><img src="static/picture/f3569fb94ea872bf471b9e38b327b7df.jpg" border='0'/></a></div>        </div>
    </div>
    <div class="col col-16 goods-right">

                        <div class="index-goods-item">
                    <div class="product-block">
                        <div class="image">
                            <div class="product-img">
                                <a href="/DBShop/goods/8/2" title="小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏"><img class="img-responsive" src="static/picture/thumb_b4793d059bbfb5c56537be2d0de9bef8.jpg"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <h5 class="name"><a href="/DBShop/goods/8/2" title="小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏">小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏</a></h5>
                                <div class="price">
                                    <span class="price-new">￥3558.00&nbsp;元</span>
                                </div>
                            </div>
                            <div id="opacity-cart" class="cart">
                                <div class="cart-style">
                                    <button onclick="add_cart(1, 8, 2);" class="add-to-cart cart-1-8" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="index-goods-item">
                    <div class="product-block">
                        <div class="image">
                            <div class="product-img">
                                <a href="/DBShop/goods/7/1" title="西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍"><img class="img-responsive" src="static/picture/thumb_ac41193ced77f8867f40b331fb6286fe.jpg"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <h5 class="name"><a href="/DBShop/goods/7/1" title="西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍">西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍</a></h5>
                                <div class="price">
                                    <span class="price-new">￥5399.00&nbsp;元</span>
                                </div>
                            </div>
                            <div id="opacity-cart" class="cart">
                                <div class="cart-style">
                                    <button onclick="add_cart(1, 7, 1);" class="add-to-cart cart-1-7" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="index-goods-item">
                    <div class="product-block">
                        <div class="image">
                            <div class="product-img">
                                <a href="/DBShop/goods/6/1" title="美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱"><img class="img-responsive" src="static/picture/thumb_1bb0543aa7433fca1e25a06c75ef8f8d.jpg"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <h5 class="name"><a href="/DBShop/goods/6/1" title="美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱">美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱</a></h5>
                                <div class="price">
                                    <span class="price-new">￥3099.00&nbsp;元</span>
                                </div>
                            </div>
                            <div id="opacity-cart" class="cart">
                                <div class="cart-style">
                                    <button onclick="add_cart(1, 6, 1);" class="add-to-cart cart-1-6" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="index-goods-item">
                    <div class="product-block">
                        <div class="image">
                            <div class="product-img">
                                <a href="/DBShop/goods/5/3" title="方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE"><img class="img-responsive" src="static/picture/thumb_b5c225bed8f0dc249315c09151208541.jpg"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <h5 class="name"><a href="/DBShop/goods/5/3" title="方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE">方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE</a></h5>
                                <div class="price">
                                    <span class="price-new">￥5799.00&nbsp;元</span>
                                </div>
                            </div>
                            <div id="opacity-cart" class="cart">
                                <div class="cart-style">
                                    <button onclick="add_cart(1, 5, 3);" class="add-to-cart cart-1-5" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="index-goods-item">
                    <div class="product-block">
                        <div class="image">
                            <div class="product-img">
                                <a href="/DBShop/goods/4/3" title="南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套"><img class="img-responsive" src="static/picture/thumb_ff468a75401a5ea18a89604aa85ddbce.jpg"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <h5 class="name"><a href="/DBShop/goods/4/3" title="南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套">南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套</a></h5>
                                <div class="price">
                                    <span class="price-new">￥119.00&nbsp;元</span>
                                </div>
                            </div>
                            <div id="opacity-cart" class="cart">
                                <div class="cart-style">
                                    <button onclick="add_cart(1, 4, 3);" class="add-to-cart cart-1-4" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="index-goods-item">
                    <div class="product-block">
                        <div class="image">
                            <div class="product-img">
                                <a href="/DBShop/goods/3/2" title="苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机"><img class="img-responsive" src="static/picture/thumb_8fa36ef874fa22000315de160e44b02e.jpg"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <h5 class="name"><a href="/DBShop/goods/3/2" title="苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机">苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机</a></h5>
                                <div class="price">
                                    <span class="price-new">￥6158.00&nbsp;元</span>
                                </div>
                            </div>
                            <div id="opacity-cart" class="cart">
                                <div class="cart-style">
                                    <button onclick="add_cart(1, 3, 2);" class="add-to-cart cart-1-3" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="index-goods-item">
                    <div class="product-block">
                        <div class="image">
                            <div class="product-img">
                                <a href="/DBShop/goods/2/1" title="索尼(SONY)KD-55X8000E 55英寸 4K超高清"><img class="img-responsive" src="static/picture/thumb_c534950c4a79ea20293e483fd4ed4aff.jpg"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <h5 class="name"><a href="/DBShop/goods/2/1" title="索尼(SONY)KD-55X8000E 55英寸 4K超高清">索尼(SONY)KD-55X8000E 55英寸 4K超高清</a></h5>
                                <div class="price">
                                    <span class="price-new">￥5199.00&nbsp;元</span>
                                </div>
                            </div>
                            <div id="opacity-cart" class="cart">
                                <div class="cart-style">
                                    <button onclick="add_cart(1, 2, 1);" class="add-to-cart cart-1-2" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <div class="index-goods-item">
                    <div class="product-block">
                        <div class="image">
                            <div class="product-img">
                                <a href="/DBShop/goods/1/1" title="小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸"><img class="img-responsive" src="static/picture/thumb_2094d0cd98ddee55b1a5696434f43483.jpg"></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="info">
                                <h5 class="name"><a href="/DBShop/goods/1/1" title="小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸">小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸</a></h5>
                                <div class="price">
                                    <span class="price-new">￥2199.00&nbsp;元</span>
                                </div>
                            </div>
                            <div id="opacity-cart" class="cart">
                                <div class="cart-style">
                                    <button onclick="add_cart(1, 1, 1);" class="add-to-cart cart-1-1" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
</div>
            <div class="container">
            <div>
                <a target="_blank" href=""><img src="static/picture/23936116e1fdf6c7bfef9082c5814ed0.jpg" border='0'/></a>            </div>
        </div>
    <div id="floor_2" class="container row has-floor index_goods_list">
        <div class="col col-4 goods-left">
            <div>
                                <div class="heading">
                    <h4 class="title">2F / 精品促销</h4>
                </div>
                <div class="drop-product"><a target="_blank" href=""><img src="static/picture/2d11328abab10fda29c6b38e43114e6b.jpg" border='0'/></a></div>            </div>
        </div>
        <div class="col col-16 goods-right">

                                <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/2/1" title="索尼(SONY)KD-55X8000E 55英寸 4K超高清"><img class="img-responsive" src="static/picture/thumb_c534950c4a79ea20293e483fd4ed4aff.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/2/1" title="索尼(SONY)KD-55X8000E 55英寸 4K超高清">索尼(SONY)KD-55X8000E 55英寸 4K超高清</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥5199.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(2, 2, 1);" class="add-to-cart cart-2-2" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/1/1" title="小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸"><img class="img-responsive" src="static/picture/thumb_2094d0cd98ddee55b1a5696434f43483.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/1/1" title="小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸">小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥2199.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(2, 1, 1);" class="add-to-cart cart-2-1" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/8/2" title="小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏"><img class="img-responsive" src="static/picture/thumb_b4793d059bbfb5c56537be2d0de9bef8.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/8/2" title="小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏">小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥3558.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(2, 8, 2);" class="add-to-cart cart-2-8" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/3/2" title="苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机"><img class="img-responsive" src="static/picture/thumb_8fa36ef874fa22000315de160e44b02e.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/3/2" title="苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机">苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥6158.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(2, 3, 2);" class="add-to-cart cart-2-3" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/7/1" title="西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍"><img class="img-responsive" src="static/picture/thumb_ac41193ced77f8867f40b331fb6286fe.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/7/1" title="西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍">西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥5399.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(2, 7, 1);" class="add-to-cart cart-2-7" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/6/1" title="美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱"><img class="img-responsive" src="static/picture/thumb_1bb0543aa7433fca1e25a06c75ef8f8d.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/6/1" title="美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱">美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥3099.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(2, 6, 1);" class="add-to-cart cart-2-6" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/5/3" title="方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE"><img class="img-responsive" src="static/picture/thumb_b5c225bed8f0dc249315c09151208541.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/5/3" title="方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE">方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥5799.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(2, 5, 3);" class="add-to-cart cart-2-5" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/4/3" title="南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套"><img class="img-responsive" src="static/picture/thumb_ff468a75401a5ea18a89604aa85ddbce.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/4/3" title="南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套">南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥119.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(2, 4, 3);" class="add-to-cart cart-2-4" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
    </div>
            <div class="container">
            <div>
                <a target="_blank" href=""><img src="static/picture/31019caf22b42d1cd52073cbc5532c78.jpg" border='0'/></a>            </div>
        </div>
    <div id="floor_3" class="container row has-floor index_goods_list">
        <div class="col col-4 goods-left">
            <div>
                                <div class="heading">
                    <h4 class="title">3F / 时尚潮流</h4>
                </div>
                <div class="drop-product"><a target="_blank" href=""><img src="static/picture/6cc78839c0a32cbe91e9113536212e2f.jpg" border='0'/></a></div>            </div>
        </div>
        <div class="col col-16 goods-right">

                                <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/7/1" title="西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍"><img class="img-responsive" src="static/picture/thumb_ac41193ced77f8867f40b331fb6286fe.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/7/1" title="西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍">西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥5399.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(3, 7, 1);" class="add-to-cart cart-3-7" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/6/1" title="美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱"><img class="img-responsive" src="static/picture/thumb_1bb0543aa7433fca1e25a06c75ef8f8d.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/6/1" title="美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱">美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥3099.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(3, 6, 1);" class="add-to-cart cart-3-6" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/4/3" title="南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套"><img class="img-responsive" src="static/picture/thumb_ff468a75401a5ea18a89604aa85ddbce.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/4/3" title="南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套">南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥119.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(3, 4, 3);" class="add-to-cart cart-3-4" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/8/2" title="小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏"><img class="img-responsive" src="static/picture/thumb_b4793d059bbfb5c56537be2d0de9bef8.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/8/2" title="小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏">小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥3558.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(3, 8, 2);" class="add-to-cart cart-3-8" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/5/3" title="方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE"><img class="img-responsive" src="static/picture/thumb_b5c225bed8f0dc249315c09151208541.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/5/3" title="方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE">方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥5799.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(3, 5, 3);" class="add-to-cart cart-3-5" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/3/2" title="苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机"><img class="img-responsive" src="static/picture/thumb_8fa36ef874fa22000315de160e44b02e.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/3/2" title="苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机">苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥6158.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(3, 3, 2);" class="add-to-cart cart-3-3" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/2/1" title="索尼(SONY)KD-55X8000E 55英寸 4K超高清"><img class="img-responsive" src="static/picture/thumb_c534950c4a79ea20293e483fd4ed4aff.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/2/1" title="索尼(SONY)KD-55X8000E 55英寸 4K超高清">索尼(SONY)KD-55X8000E 55英寸 4K超高清</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥5199.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(3, 2, 1);" class="add-to-cart cart-3-2" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    <div class="index-goods-item">
                        <div class="product-block">
                            <div class="image">
                                <div class="product-img">
                                    <a href="/DBShop/goods/1/1" title="小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸"><img class="img-responsive" src="static/picture/thumb_2094d0cd98ddee55b1a5696434f43483.jpg"></a>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="info">
                                    <h5 class="name"><a href="/DBShop/goods/1/1" title="小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸">小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸</a></h5>
                                    <div class="price">
                                        <span class="price-new">￥2199.00&nbsp;元</span>
                                    </div>
                                </div>
                                <div id="opacity-cart" class="cart">
                                    <div class="cart-style">
                                        <button onclick="add_cart(3, 1, 1);" class="add-to-cart cart-3-1" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
    </div>
            <div class="container">
            <div>
                <a target="_blank" href=""><img src="static/picture/a580514522e2a1d6af728290439abdb0.jpg" border='0'/></a>            </div>
        </div>
    
<div id="floor_4" class="container row has-floor index_goods_list">
        <div class="col col-4 goods-left">
            <div>
                                <div class="heading">
                    <h4 class="title">4F / 热门推荐</h4>
                </div>
                <div class="drop-product"><a target="_blank" href=""><img src="static/picture/e2d9b76b021bf4d67e1d48a921843d59.jpg" border='0'/></a></div>            </div>
        </div>
        <div class="col col-16 goods-right">
                        <div class="index-goods-item">
                <div class="product-block">
                    <div class="image">
                        <div class="product-img">
                            <a href="/DBShop/goods/1/1" title="小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸"><img class="img-responsive" src="static/picture/thumb_2094d0cd98ddee55b1a5696434f43483.jpg"></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="info">
                            <h5 class="name"><a href="/DBShop/goods/1/1" title="小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸">小米（MI）电视4A标准版 L55M5-AZ/L55M5-AD 55英寸</a></h5>
                            <div class="price">
                                <span class="price-new">￥2199.00&nbsp;元</span>
                            </div>
                        </div>
                        <div id="opacity-cart" class="cart">
                            <div class="cart-style">
                                <button onclick="add_cart(4, 1, 1);" class="add-to-cart cart-4-1" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="index-goods-item">
                <div class="product-block">
                    <div class="image">
                        <div class="product-img">
                            <a href="/DBShop/goods/5/3" title="方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE"><img class="img-responsive" src="static/picture/thumb_b5c225bed8f0dc249315c09151208541.jpg"></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="info">
                            <h5 class="name"><a href="/DBShop/goods/5/3" title="方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE">方太（FOTILE）20立方风魔方 侧吸式触控式手感智控抽吸油烟机燃气灶烟灶套餐JQD2T+HC8BE</a></h5>
                            <div class="price">
                                <span class="price-new">￥5799.00&nbsp;元</span>
                            </div>
                        </div>
                        <div id="opacity-cart" class="cart">
                            <div class="cart-style">
                                <button onclick="add_cart(4, 5, 3);" class="add-to-cart cart-4-5" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="index-goods-item">
                <div class="product-block">
                    <div class="image">
                        <div class="product-img">
                            <a href="/DBShop/goods/7/1" title="西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍"><img class="img-responsive" src="static/picture/thumb_ac41193ced77f8867f40b331fb6286fe.jpg"></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="info">
                            <h5 class="name"><a href="/DBShop/goods/7/1" title="西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍">西门子（SIEMENS） XQG100-WM14U561HW 10公斤 变频 一键智能除渍</a></h5>
                            <div class="price">
                                <span class="price-new">￥5399.00&nbsp;元</span>
                            </div>
                        </div>
                        <div id="opacity-cart" class="cart">
                            <div class="cart-style">
                                <button onclick="add_cart(4, 7, 1);" class="add-to-cart cart-4-7" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="index-goods-item">
                <div class="product-block">
                    <div class="image">
                        <div class="product-img">
                            <a href="/DBShop/goods/4/3" title="南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套"><img class="img-responsive" src="static/picture/thumb_ff468a75401a5ea18a89604aa85ddbce.jpg"></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="info">
                            <h5 class="name"><a href="/DBShop/goods/4/3" title="南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套">南极人(NanJiren)家纺 简约全棉四件套床上用品纯棉斜纹双人被套床单式4件套</a></h5>
                            <div class="price">
                                <span class="price-new">￥119.00&nbsp;元</span>
                            </div>
                        </div>
                        <div id="opacity-cart" class="cart">
                            <div class="cart-style">
                                <button onclick="add_cart(4, 4, 3);" class="add-to-cart cart-4-4" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="index-goods-item">
                <div class="product-block">
                    <div class="image">
                        <div class="product-img">
                            <a href="/DBShop/goods/2/1" title="索尼(SONY)KD-55X8000E 55英寸 4K超高清"><img class="img-responsive" src="static/picture/thumb_c534950c4a79ea20293e483fd4ed4aff.jpg"></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="info">
                            <h5 class="name"><a href="/DBShop/goods/2/1" title="索尼(SONY)KD-55X8000E 55英寸 4K超高清">索尼(SONY)KD-55X8000E 55英寸 4K超高清</a></h5>
                            <div class="price">
                                <span class="price-new">￥5199.00&nbsp;元</span>
                            </div>
                        </div>
                        <div id="opacity-cart" class="cart">
                            <div class="cart-style">
                                <button onclick="add_cart(4, 2, 1);" class="add-to-cart cart-4-2" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="index-goods-item">
                <div class="product-block">
                    <div class="image">
                        <div class="product-img">
                            <a href="/DBShop/goods/8/2" title="小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏"><img class="img-responsive" src="static/picture/thumb_b4793d059bbfb5c56537be2d0de9bef8.jpg"></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="info">
                            <h5 class="name"><a href="/DBShop/goods/8/2" title="小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏">小米Mix3 全网通版 8GB+128GB 黑色 磁动力滑盖全面屏</a></h5>
                            <div class="price">
                                <span class="price-new">￥3558.00&nbsp;元</span>
                            </div>
                        </div>
                        <div id="opacity-cart" class="cart">
                            <div class="cart-style">
                                <button onclick="add_cart(4, 8, 2);" class="add-to-cart cart-4-8" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="index-goods-item">
                <div class="product-block">
                    <div class="image">
                        <div class="product-img">
                            <a href="/DBShop/goods/6/1" title="美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱"><img class="img-responsive" src="static/picture/thumb_1bb0543aa7433fca1e25a06c75ef8f8d.jpg"></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="info">
                            <h5 class="name"><a href="/DBShop/goods/6/1" title="美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱">美的（Midea）BCD-525WKPZM(E) 星际银 525升对开门电冰箱</a></h5>
                            <div class="price">
                                <span class="price-new">￥3099.00&nbsp;元</span>
                            </div>
                        </div>
                        <div id="opacity-cart" class="cart">
                            <div class="cart-style">
                                <button onclick="add_cart(4, 6, 1);" class="add-to-cart cart-4-6" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="index-goods-item">
                <div class="product-block">
                    <div class="image">
                        <div class="product-img">
                            <a href="/DBShop/goods/3/2" title="苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机"><img class="img-responsive" src="static/picture/thumb_8fa36ef874fa22000315de160e44b02e.jpg"></a>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="info">
                            <h5 class="name"><a href="/DBShop/goods/3/2" title="苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机">苹果(Apple) iPhone X 64GB 深空灰色 移动联通电信全网通4G手机</a></h5>
                            <div class="price">
                                <span class="price-new">￥6158.00&nbsp;元</span>
                            </div>
                        </div>
                        <div id="opacity-cart" class="cart">
                            <div class="cart-style">
                                <button onclick="add_cart(4, 3, 2);" class="add-to-cart cart-4-3" type="button"><i class="iconfont"></i> <span>加入购物车</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
    </div>
<div class="floors">
        <a class="floor" href="#floor_1"><span class="floor_id">1F</span><span class="floor_title">特价商品</span></a>
        <a class="floor" href="#floor_2"><span class="floor_id">2F</span><span class="floor_title">精品促销</span></a>
        <a class="floor" href="#floor_3"><span class="floor_id">3F</span><span class="floor_title">时尚潮流</span></a>
        <a class="floor" href="#floor_4"><span class="floor_id">4F</span><span class="floor_title">热门推荐</span></a>
</div>

</div>
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: false,
            slideshowSpeed: 4000
        });
    });
    $("#J_categoryContainer li").hover(function() {
        $(this).addClass("current");
    }, function() {
        $(this).removeClass("current");
    });

    function add_cart(floor_num, goods_id, class_id) {
        $.post("/DBShop/cart/getAddCartInfo",{goods_id:goods_id, class_id:class_id},
            function (data) {
                if(data != '') {
                    $.post("/DBShop/cart/addCart",{goods_id:data.goods_id, class_id:data.class_id, buy_goods_num:1, select_color_value:data.select_color_value, select_size_value:data.select_size_value, selected_spec_tag_id_str:data.selected_spec_tag_id_str},
                        function(datasta) {
                            if(datasta == 'true') {
                                $('.cart-'+floor_num+'-'+goods_id).html('已成功加入购物车');

                                var cart_goods_num = parseInt($('#top_cart').html()) + 1;
                                $('#top_cart').css('display','');
                                $('#top_cart').html(cart_goods_num);

                                setTimeout(function(){$('.cart-'+floor_num+'-'+goods_id).html('<i class="iconfont"></i> <span>加入购物车</span>');},3000);
                                return true;
                            } else {
                                alert(datasta);
                            }
                        }
                    );
                }
            },'json');
    }

    $(document).ready(function() {
        if ($(window).width() >= 768) {
            var first_floor_element_offset = $('#floor_1').offset();
            $('.floors').css('left', parseInt(first_floor_element_offset.left) - 50 + 'px');

            $('.floors a').click(function(e) {
                $('html, body').animate({ scrollTop: parseInt($($(this).attr('href')).offset().top) - 20 }, 600);
                return false;
            });

            $(window).scroll(function () {
                var window_top = $(window).scrollTop();
                $('.has-floor').each(function (i) {
                    var page_builder_wrapper_top = $(this).offset().top;

                    if (window_top > page_builder_wrapper_top - 300) {
                        $('.floors a:eq(' + i + ')').addClass('floor-active').siblings('a').removeClass('floor-active');
                    }
                });
            });
        } else {
            $('.floors').css('display','none');
        }
    });
</script><div class="site-footer">
            <div class="footer-service">
        <div class="container">
            <ul class="list-service clearfix">
                                    <li class="li_service">
                        <a target="_blank" href="/DBShop/article/single/id/16">
                            <i class="iconfont"></i>                            <strong>一小时快速响应</strong>
                        </a>
                    </li>
                                    <li class="li_service">
                        <a target="_blank" href="/DBShop/article/single/id/17">
                            <i class="iconfont"></i>                            <strong>7天无理由退货</strong>
                        </a>
                    </li>
                                    <li class="li_service">
                        <a target="_blank" href="/DBShop/article/single/id/18">
                            <i class="iconfont"></i>                            <strong>15天免费换货</strong>
                        </a>
                    </li>
                                    <li class="li_service">
                        <a target="_blank" href="/DBShop/article/single/id/19">
                            <i class="iconfont"></i>                            <strong>满100包邮</strong>
                        </a>
                    </li>
                                    <li class="li_service">
                        <a target="_blank" href="/DBShop/article/single/id/20">
                            <i class="iconfont"></i>                            <strong>售后服务</strong>
                        </a>
                    </li>
                            </ul>
        </div>
        </div>
        <div class="container">
        <div class="footer-links clearfix">
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>
                                <dd>
                    <a target="_blank" href="/DBShop/article/single/id/13">
                        如何购买                    </a>
                </dd>
                                <dd>
                    <a target="_blank" href="/DBShop/article/single/id/14">
                        如何收货                    </a>
                </dd>
                            </dl>
            <dl class="col-links">
                <dt>服务支持</dt>
                                        <dd>
                            <a target="_blank" href="/DBShop/article/single/id/5">
                                联系我们                            </a>
                        </dd>
                                            <dd>
                            <a target="_blank" href="/DBShop/article/single/id/6">
                                退换服务                            </a>
                        </dd>
                                </dl>
            <dl class="col-links">
                <dt>支付方式</dt>
                                        <dd>
                            <a target="_blank" href="/DBShop/article/single/id/7">
                                在线支付                            </a>
                        </dd>
                                            <dd>
                            <a target="_blank" href="/DBShop/article/single/id/8">
                                线下支付                            </a>
                        </dd>
                                </dl>
            <dl class="col-links">
                <dt>关于我们</dt>
                                        <dd>
                            <a target="_blank" href="/DBShop/article/single/id/9">
                                关于我们                            </a>
                        </dd>
                                            <dd>
                            <a target="_blank" href="/DBShop/article/single/id/10">
                                网站介绍                            </a>
                        </dd>
                                </dl>
            <dl class="col-links">
                <dt>客服中心</dt>
                                        <dd>
                            <a target="_blank" href="/DBShop/article/single/id/11">
                                联系客服                            </a>
                        </dd>
                                            <dd>
                            <a target="_blank" href="/DBShop/article/single/id/12">
                                服务说明                            </a>
                        </dd>
                                </dl>
            <div class="col-contact">
                <p><span style="font-size: 20px;"><strong>400-800-xxxx</strong></span></p><p>周一至周五 9:00-18:00<br/></p>            </div>
        </div>
        <div class="footer-info clearfix">
                        <div style="position:relative;" class="info-text">

<p>Copyright &copy;2012-2019  <a href="https://www.dbshop.net/" target="_blank">DBShop</a> 版权所有<br /></p>

<p align="center">
    </p>

</div>
</div>
</div>
</div>

<div class="modal hide fade" id="myModal">
  <div class="modal-header">
    <h3>DBShop电子商务系统 提示</h3>
  </div>
  <div class="modal-body">
    <p id="message_show"></p>
  </div>
  <div class="modal-footer" id="message_url">
  </div>
</div>
<!--[if lte IE 8]>
<script>
    $("#dbshop-body").prepend('<p style="color:red;">您的浏览器版本有点低，对站点的某些视觉效果支持不是很好，您可以考虑去 升级浏览器版本 或者安装 <a href="http://rj.baidu.com/soft/detail/14744.html" target="_blank">Chrome</a> 、<a href="http://www.firefox.com.cn/" target="_blank">Firefox</a> 、<a href="http://www.baidu.com/s?wd=IE9" target="_blank">IE9或更高版本</a> 等其他浏览器!</p>');
</script>
<![endif]-->


<style type="text/css">
    .go-top{position:fixed;width:40px;bottom:15%;right:0;z-index:890;}
    .go-top .go-top-box{width:100%;margin-bottom:3px;background:#d9d9d9;text-align:center;}
    .go-top .go-top-box a{display:block;height:35px;padding-top:5px;}
    .go-top .go-top-box a:hover{background:#777777;text-decoration:none;}
    .go-top .go-top-box a:hover .asid_title,.go-top .go-top-box .asid_title{color:#fff;font-size:12px;display:block;padding-left:6px;line-height:18px;width:30px;margin-top:-2px;}
</style>
<div class="go-top" id="go-top">
    <div class="go-top-box relative" style="display:none;">
        <a href="#"><img alt="返回顶部" title="返回顶部" class="adid_icon" src="static/picture/icon_back.png"></a>
    </div>
</div>
<script>
    (function(e){e.fn.hhShare=function(t){var n={cenBox:"go-top-box",icon:"adid_icon",addClass:"red_bag",titleClass:"asid_title",triangle:"asid_share_triangle",showBox:"asid_sha_layer"},r=e.extend(n,t);this.each(function(){var t=e(this),n=e("."+r.cenBox).last();n.hide(),e("."+r.triangle+","+"."+r.showBox).hide(),e("."+r.cenBox).live({mouseenter:function(){var t=e(this).find("."+r.icon),n=e(this).find("."+r.icon).attr("alt");t.hide(),e(this).addClass(r.addClass),e(this).children("a").append('<b class="'+r.titleClass+'">'+n+"</b>"),e(this).find("."+r.triangle+","+"."+r.showBox).show()},mouseleave:function(){var t=e(this).find("."+r.icon),n=e(this).find("."+r.icon).attr("alt");t.show(),e(this).removeClass(r.addClass),e(this).find("."+r.titleClass).remove(),e(this).find("."+r.triangle+","+"."+r.showBox).hide()}}),e(window).scroll(function(){e(window).scrollTop()>100?n.fadeIn():n.fadeOut()}),n.click(function(){return e("body,html").animate({scrollTop:0},500),!1})})}})(jQuery);
    $(function(){
        $('#go-top').hhShare({
            icon       : 'adid_icon'
        });
    });
</script>
</body>
</html>

