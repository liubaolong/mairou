<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\wamp\www\mairou\dingcan\public/../application/index\view\shop\join.html";i:1503364017;s:78:"D:\wamp\www\mairou\dingcan\public/../application/index\view\public\layout.html";i:1503324306;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>DeathGhost-用户中心</title>
<meta name="keywords" content="DeathGhost,DeathGhost.cn,web前端设,移动WebApp开发" />
<meta name="description" content="DeathGhost.cn::H5 WEB前端设计开发!" />
<meta name="author" content="DeathGhost"/>
<link href="__CSS_PATH__/style.css" rel="stylesheet" type="text/css" />
<!-- <link href="__STATIC_PATH__/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" /> -->
<script type="text/javascript" src="__JS_PATH__/public.js"></script>
<script type="text/javascript" src="__JS_PATH__/jquery.js"></script>
<script type="text/javascript" src="__JS_PATH__/jqpublic.js"></script>
<script type="text/javascript" src="__JS_PATH__/jQuery-1.11.3.js"></script>
<!--
Author: DeathGhost
Author URI: http://www.deathghost.cn
-->
</head>
<body>
<header>
 <section class="Topmenubg">
  <div class="Topnav">
   <div class="LeftNav">
    <a href="<?php echo url('auth/register'); ?>">注册</a>/<a href="<?php echo url('auth/login'); ?>">登录</a>
   </div>
   <div class="RightNav">
    <a href="<?php echo url('user/user'); ?>">用户中心</a> <a href="<?php echo url('order/orderlist'); ?>" target="_self" title="我的订单">我的订单</a> <a href="<?php echo url('cart/cart'); ?>">购物车（0）</a> <a href="<?php echo url('user/favorites'); ?>" target="_self" title="我的收藏">我的收藏</a> <a href="<?php echo url('shop/join'); ?>">商家入驻</a>
   </div>
  </div>
 </section>
 <div class="Logo_search">
  <div class="Logo">
   <img src="__IMG_PATH__/logo.jpg" title="DeathGhost" alt="模板">
   <i></i>
   <span>西安市 [ <a href="#">莲湖区</a> ]</span>
  </div>
  <div class="Search" style="height:115px;"> 
   <form method="get" id="main_a_serach" onsubmit="return check_search(this)">
   <div class="Search_nav" id="selectsearch">
    <a href="javascript:;" onClick="selectsearch(this,'restaurant_name')" class="choose">餐厅</a>
    <a href="javascript:;" onClick="selectsearch(this,'food_name')">食物名</a>
   </div>
   <div class="Search_area"> 
   <input type="search" id="fkeyword" name="keyword" placeholder="请输入您所需查找的餐厅名称或食物名称..." class="searchbox" />
   <input type="image" src="__IMG_PATH__/1.bmp" style="margin-bottom:40px;"/>
   </div>
   </form>
   <p class="hotkeywords"><a href="#" title="酸辣土豆丝">酸辣土豆丝</a><a href="#" title="这里是产品名称">螃蟹炒年糕</a><a href="#" title="这里是产品名称">牛奶炖蛋</a><a href="#" title="这里是产品名称">芝麻酱凉面</a><a href="#" title="这里是产品名称">滑蛋虾仁</a><a href="#" title="这里是产品名称">蒜汁茄子</a></p>
  </div>
 </div>
 <nav class="menu_bg">
  <ul class="menu">
   <li><a href="<?php echo url('index/index'); ?>">首页</a></li>
   <li><a href="<?php echo url('index/list'); ?>">订餐</a></li>
   <li><a href="<?php echo url('index/category'); ?>">积分商城</a></li>
   <li><a href="<?php echo url('index/article_read'); ?>">关于我们</a></li>
  </ul>
 </nav>
</header>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<link href="__STATIC_PATH__/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" /> 
<section class="Psection MT20" id="Cflow">
	<div>
			<form action="<?php echo url('index/shop/join'); ?>" method="POST" enctype="multipart/form-data" onsubmit="return submitup()">
				<table style="width:600px;margin-top:30px;margin:auto;border:1px solid #DDDDDD;" class="table table-hover">
				  <thead>
					    <tr>
					      <th colspan="2" style="text-align:center;font-size:35px;">商家申请表</th>
					    </tr>
					  </thead>
					<tr style="height:40px;">
						<td>店铺名:</td>
						<td><input type="text" name="shop" id="shop" maxlength="15" size="40" style="border:1px solid #999;height:25px;" onblur="checkname()"><p style="display:none;" id="p1"></p></td>
					</tr>
					<tr style="height:40px;">
						<td>身份证</td>
						<td><input type="text" name="ident" id="ident" size="40" style="border:1px solid #999;height:25px;" onblur="checkid()"><p style="display:none;" id="p2"></p></td>
					</tr>
					<tr style="height:40px;">
						<td>订餐电话:</td>
						<td><input type="text" name="phone" id="phone" size="40" style="border:1px solid #999;height:25px;" onblur="checkphone()"><p style="display:none;" id="p3"></p></td>
					</tr>
					<tr style="height:40px;">
						<td>所在区:</td>
						<td>
							<select id="s_province" name="s_province" style="height:30px;"></select>  
						    <select id="s_city" name="s_city" style="height:30px;"></select>  
						    <select id="s_county" name="s_county" style="width:65px;height:30px;"></select>
						    <script class="resources library" src="__JS_PATH__/area.js" type="text/javascript"></script>
						    <script type="text/javascript">_init_area();</script>
						</td>
					</tr>
					<tr style="height:40px;">
						<td>详细地址:</td>
						<td><input type="text" name="address" id="address" size="40" style="border:1px solid #999;height:25px;" onblur="checkaddress()"></td>
					</tr>
					<tr style="height:40px;">
						<td>营业时间:</td>
						<td><input type="text" name="time" id="time" size="40" style="border:1px solid #999;height:25px;" onblur="checktime()"></td>
					</tr>
					<tr style="height:40px;">
						<td>店铺图片:</td>
						<td><input type="file" name="photo" id="photo" onblur="checkphoto()"></td>
					</tr>
					<tr style="height:40px;">
						<td>wifi:</td>
						<td>
							有<input type="radio" name="wifi" value="1">
							无<input type="radio" name="wifi" value="2" checked>
						</td>
					</tr>
					<tr style="height:40px;">
						<td>商家简介:</td>
						<td><textarea rows="10" cols="40" name="info" id="info" style="resize:none;" size="40" style="border:1px solid #999;height:25px;" onblur="checkinfo()"></textarea></td>
					</tr>
					<tr style="height:40px;text-align:center;">
						<td colspan="2"><input type="submit" value="提交" style="width:50px;height:30px;"></td>
					</tr>
				</table>
			</form>
	</div>
</section>
<script type="text/javascript">
//店铺名称
	function checkname()
	{
		var shop;
		if ($("#shop").val() == '') {
			$("#shop").css('border', '1px solid red');
			return false;
		} else {
			$.post("<?php echo url('index/shop/checkname'); ?>",{shop:$("#shop").val()},function(data){
					if (data['code'] == 1) {
						$("#shop").css('border', '1px solid green');
						$("#p1").html('商铺名可用');
						$("#p1").css('display','none');
					} else {
						$("#p1").html('商铺名已存在');
						$("#p1").css('display','block');
						$("#shop").css('border','1px solid red');
					}
				},'json');
		}
		if ($("#p1").html()=='商铺名已存在') {
			return false;
		} else {
		return true;	}

	}
//身份证
	function checkid()
	{
		var ident;
		if($("#ident").val() == ''){
			$("#ident").css('border', '1px solid red');
			return false;
		} else {

			$.post("<?php echo url('index/shop/checkid'); ?>",{ident:$('#ident').val()},function(data){
				if (data != '没有信息' && data != 'ok' && data != '身份证为空') {

					$("#ident").css('border','1px solid green');
					$("#p2").html(data);
					$("#p2").css('display','block');
							return true;
				} else{
					$("#p2").html('身份证不正确');
					$("#p2").css('display','block');
					$("#ident").css('border','1px solid red');
					return false;
				}
			},'json');
		}
		if ($("#p2").html()=='身份证不正确') {
			return false;
		} else {
		return true;	}

	}
//电话
	function checkphone()
	{
		var phone;
		if ($("#phone").val() == '') {
			$("#phone").css('border','1px solid red');
			return false;
		} else {
			$.post("<?php echo url('index/shop/checkphone'); ?>",{phone:$('#phone').val()},function(data){
				if (data != '手机号不正确' && data != null && data != '手机号为空') {
					$("#phone").css('border','1px solid green');
					$("#p3").html(data);
					$("#p3").css('display','block');
				} else {
					$("#p3").html('手机号不正确');
					$("#p3").css('display','block');
					$("#phone").css('border','1px solid red');
				}

			},'json'); 
		}
		if ($("#p3").html()=='手机号不正确') {
			return false;
		} else {
		return true;	}
		
	}	
//地址
	function checkaddress()
	{
		var address;
		if ($('#address').val() == '') {
			$("#address").css('border', '1px solid red');
			return false;
		}  else{
			$("#address").css('border', '1px solid green');
			
		}
		return true;
	}
//营业时间
	function checktime()
	{
		var time;
		if ($('#time').val() == '') {
			$("#time").css('border', '1px solid red');
			return false;
		} else {
			$("#time").css('border', '1px solid green');
			;
		}
		return true
	}
//店铺图片
	function checkphoto()
	{
		var photo;
		if ($('#photo').val() == '') {
			$("#photo").css('border', '1px solid red');
			return false;
		} else {
			$("#photo").css('border', '1px solid green');
			
		}
		return true;
	}
//店家简介
	function checkinfo()
		{
			var info;
			if ($('#info').val() == '') {
				$("#info").css('border', '1px solid red');
				return false;
			} else {
				$("#info").css('border', '1px solid green');
				
			}
			return true;
		}
	function submitup()
	{
		
		if(checkinfo()&&checkphoto()&&checktime()&&checkaddress()&&checkphone()&&checkid()&&checkname()){
			return  true;
		}
		return  false;
	}
</script>
<div class="F-link">
  <span>友情链接：</span>
  <a href="http://www.deathghost.cn" target="_self" title="DeathGhost">DeathGhost</a>
  <a href="http://www.17sucai.com/pins/15966.html" target="_self" title="免费后台管理模板">绿色清爽版通用型后台管理模板免费下载</a>
  <a href="http://www.17sucai.com/pins/17567.html" target="_self" title="果蔬菜类模板源码">HTML5果蔬菜类模板源码</a>
  <a href="http://www.17sucai.com/pins/14931.html" target="_self" title="黑色的cms商城网站后台管理模板">黑色的cms商城网站后台管理模板</a>
 </div>
<footer>
 <section class="Otherlink">
  <aside>
   <div class="ewm-left">
    <p>手机扫描二维码：</p>
    <img src="__IMG_PATH__/Android_ico_d.gif">
    <img src="__IMG_PATH__/iphone_ico_d.gif">
   </div>
   <div class="tips">
    <p>客服热线</p>
    <p><i>1830927**73</i></p>
    <p>配送时间</p>
    <p><time>09：00</time>~<time>22:00</time></p>
    <p>网站公告</p>
   </div>
  </aside>
  <section>
    <div>
    <span><i class="i1"></i>配送支付</span>
    <ul>
     <li><a href="article_read.html" target="_self" title="标题">支付方式</a></li>
     <li><a href="article_read.html" target="_self" title="标题">配送方式</a></li>
     <li><a href="article_read.html" target="_self" title="标题">配送效率</a></li>
     <li><a href="article_read.html" target="_self" title="标题">服务费用</a></li>
    </ul>
    </div>
    <div>
    <span><i class="i2"></i>关于我们</span>
    <ul>
     <li><a href="article_read.html" target="_self" title="标题">招贤纳士</a></li>
     <li><a href="article_read.html" target="_self" title="标题">网站介绍</a></li>
     <li><a href="article_read.html" target="_self" title="标题">配送效率</a></li>
     <li><a href="article_read.html" target="_self" title="标题">商家加盟</a></li>
    </ul>
    </div>
    <div>
    <span><i class="i3"></i>帮助中心</span>
    <ul>
     <li><a href="article_read.html" target="_self" title="标题">服务内容</a></li>
     <li><a href="article_read.html" target="_self" title="标题">服务介绍</a></li>
     <li><a href="article_read.html" target="_self" title="标题">常见问题</a></li>
     <li><a href="article_read.html" target="_self" title="标题">网站地图</a></li>
    </ul>
    </div>
  </section>
 </section>
<div class="copyright">© 版权所有 2016 DeathGhost 技术支持：<a href="http://www.deathghost.cn" title="DeathGhost">DeathGhost</a></div>
</footer>
</body>
</html>
<script type="text/javascript">
function selectsearch(theA,word){
 obj=document.getElementById("selectsearch").getElementsByTagName("a");
 for(var i=0;i< obj.length;i++ ){
  obj[i].className='';
 }
 theA.className='choose';
  if(word=='restaurant_name'){
   document.getElementById('main_a_serach').action="<?php echo url('shop/search_s'); ?>";//Test url
  }else if(word=='food_name'){
   document.getElementById('main_a_serach').action="<?php echo url('meal/search_p'); ?>";//Test url
  }
}
    var Gid  = document.getElementById ;
    var showArea = function(){
      Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +  
      Gid('s_city').value + " - 县/区" + 
      Gid('s_county').value + "</h3>";                 }

    $('#yzm').click(function(){
       var phone = $('.phone').val();
       $.get("<?php echo url('auth/yzm'); ?>",{phone:phone},function(data){
          console.log(data);
       });
       return false;
    })

</script>
