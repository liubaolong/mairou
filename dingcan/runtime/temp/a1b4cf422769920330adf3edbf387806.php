<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\wamp\www\mairou\dingcan\public/../application/admin\view\auth\login.html";i:1503283797;s:78:"D:\wamp\www\mairou\dingcan\public/../application/admin\view\public\layout.html";i:1503283797;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="favicon.ico" >
<link rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__LIB_PATH__/html5.js"></script>
<script type="text/javascript" src="__LIB_PATH__/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__ADMIN_PATH__/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__ADMIN_PATH__/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__LIB_PATH__/Hui-iconfont/1.0.8/iconfont.css" />

<link rel="stylesheet" type="text/css" href="__ADMIN_PATH__/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__ADMIN_PATH__/h-ui.admin/css/style.css" />
<!-- 不同css -->
<link rel="stylesheet" href="__LIB_PATH__/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<link href="__LIB_PATH__/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />


<!-- 不同css -->
<!--[if IE 6]>
<script type="text/javascript" src="http://__LIB_PATH__.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script><![endif]-->
<!--/meta 作为公共模版分离出去-->

<!-- <title>H-ui.admin v3.0</title> -->
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯'," + "'<?php echo url('article/article_add'); ?>')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯'," + "'<?php echo url('picture/picture_add'); ?>')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯'," + "'<?php echo url('product/product_add'); ?>')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户'," + "'<?php echo url('member/member_add'); ?>','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">
	
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('article/article_list'); ?>" title="资讯管理">资讯管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('picture/picture_list'); ?>" title="图片管理">图片管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('product/product_brand'); ?>" title="品牌管理">品牌管理</a></li>
					<li><a href="<?php echo url('product/product_category'); ?>" title="分类管理">分类管理</a></li>
					<li><a href="<?php echo url('product/product_list'); ?>" title="产品管理">产品管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://h-ui.duoshuo.com/admin/" title="评论列表">评论列表</a></li>
					<li><a href="<?php echo url('feedback/feedback_list'); ?>" title="意见反馈">意见反馈</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('member/member_list'); ?>" title="会员列表">会员列表</a></li>
					<li><a href="<?php echo url('member/member_del'); ?>" title="删除的会员">删除的会员</a></li>
					<li><a href="<?php echo url('member/member_level'); ?>" title="等级管理">等级管理</a></li>
					<li><a href="<?php echo url('member/member_scoreoperation'); ?>" title="积分管理">积分管理</a></li>
					<li><a href="<?php echo url('member/member_record_browse'); ?>" title="浏览记录">浏览记录</a></li>
					<li><a href="<?php echo url('member/member_record_download'); ?>" title="下载记录">下载记录</a></li>
					<li><a href="<?php echo url('member/member_record_share'); ?>" title="分享记录">分享记录</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('admin/admin_role'); ?>" title="角色管理">角色管理</a></li>
					<li><a href="<?php echo url('admin/admin_permission'); ?>" title="权限管理">权限管理</a></li>
					<li><a href="<?php echo url('admin/admin_list'); ?>" title="管理员列表">管理员列表</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('charts/charts_1'); ?>" title="折线图">折线图</a></li>
					<li><a href="<?php echo url('charts/charts_2'); ?>" title="时间轴折线图">时间轴折线图</a></li>
					<li><a href="<?php echo url('charts/charts_3'); ?>" title="区域图">区域图</a></li>
					<li><a href="<?php echo url('charts/charts_4'); ?>" title="柱状图">柱状图</a></li>
					<li><a href="<?php echo url('charts/charts_5'); ?>" title="饼状图">饼状图</a></li>
					<li><a href="<?php echo url('charts/charts_6'); ?>" title="3D柱状图">3D柱状图</a></li>
					<li><a href="<?php echo url('charts/charts_7'); ?>" title="3D饼状图">3D饼状图</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('system/system_base'); ?>" title="系统设置">系统设置</a></li>
					<li><a href="<?php echo url('system/system_category'); ?>" title="栏目管理">栏目管理</a></li>
					<li><a href="<?php echo url('system/system_data'); ?>" title="数据字典">数据字典</a></li>
					<li><a href="<?php echo url('system/system_shielding'); ?>" title="屏蔽词">屏蔽词</a></li>
					<li><a href="<?php echo url('system/system_log'); ?>" title="系统日志">系统日志</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>

<!--/_menu 作为公共模版分离出去-->

﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link href="static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="static/h-ui/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script><![endif]-->
<title>后台登录 - H-ui.admin.page v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
	<div id="loginform" class="loginBox">
		<form class="form form-horizontal" action="index.html" method="post">
			<div class="row cl">
				<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
				<div class="formControls col-xs-8">
					<input id="" name="" type="text" placeholder="账户" class="input-text size-L">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
				<div class="formControls col-xs-8">
					<input id="" name="" type="password" placeholder="密码" class="input-text size-L">
				</div>
			</div>
			<div class="row cl">
				<div class="formControls col-xs-8 col-xs-offset-3">
					<input class="input-text size-L" type="text" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
					<img src="images/VerifyCode.aspx.png">
					<a id="kanbuq" href="javascript:;">看不清，换一张</a>
				</div>
			</div>
			<div class="row cl">
				<div class="formControls col-xs-8 col-xs-offset-3">
					<label for="online">
						<input type="checkbox" name="online" id="online" value="">
						使我保持登录状态</label>
				</div>
			</div>
			<div class="row cl">
				<div class="formControls col-xs-8 col-xs-offset-3">
					<input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
					<input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin.page.v3.0</div>

<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="static/h-ui/js/H-ui.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__LIB_PATH__/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__LIB_PATH__/layer/2.4/layer.js"></script> 
 
<script type="text/javascript" src="__LIB_PATH__/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__LIB_PATH__/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__LIB_PATH__/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript" src="__ADMIN_PATH__/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="__ADMIN_PATH__/h-ui.admin/js/H-ui.admin.page.js"></script> 
<script type="text/javascript" src="__LIB_PATH__/hcharts/Highcharts/5.0.6/js/highcharts.js"></script>
<script type="text/javascript" src="__LIB_PATH__/hcharts/Highcharts/5.0.6/js/modules/exporting.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__LIB_PATH__/hcharts/Highcharts/5.0.6/js/highcharts-3d.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__LIB_PATH__/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="__LIB_PATH__/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__LIB_PATH__/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="__LIB_PATH__/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__LIB_PATH__/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__LIB_PATH__/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="__LIB_PATH__/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>

<script type="text/javascript" src="__LIB_PATH__/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="__LIB_PATH__/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="__LIB_PATH__/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="__LIB_PATH__/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="__LIB_PATH__/lightbox2/2.8.1/js/lightbox.min.js"></script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>