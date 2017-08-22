<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\wamp\www\mairou\dingcan\public/../application/sadmin\view\sindex\sindex.html";i:1503387939;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>商家后台管理中心</title>  
    <link rel="stylesheet" href="__CSS_PATH__/pintuer.css">
    <link rel="stylesheet" href="__CSS_PATH__/sadmin.css">
    <script src="__JS_PATH__/sjquery.js"></script>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main" style="background:url(__IMG_PATH__/bg.jpg)">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="__IMG_PATH__/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-red" href="<?php echo url('sadmin/auth/logout'); ?>"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title" style="background:url(__IMG_PATH__/bg.jpg)"><strong><span class="icon-list"></span>管理列表</strong></div>
  <h2><span class="icon-user"></span>基本信息</h2>
  <ul style="display:block">
    <li><a href="<?php echo url('sindex/info'); ?>" target="right"><span class="icon-caret-right"></span>店铺信息</a></li>
    <li><a href="<?php echo url('sindex/book'); ?>" target="right"><span class="icon-caret-right"></span>评价管理</a></li>     
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>菜品管理</h2>
  <ul>
    <li><a href="<?php echo url('sindex/list'); ?>" target="right"><span class="icon-caret-right"></span>菜品管理</a></li>
    <li><a href="<?php echo url('sindex/add'); ?>" target="right"><span class="icon-caret-right"></span>添加菜品</a></li>
  </ul>  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo url('sindex/sindex'); ?>" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="info.html" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>