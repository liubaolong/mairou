<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\wamp\www\mairou\dingcan\public/../application/index\view\shop\shop.html";i:1503283797;s:79:"D:\wamp\www\mairou\dingcan\public/../application/index\view\tpublic\layout.html";i:1503401924;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>肉肉外卖网</title>

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
    <a href="<?php echo url('auth/register'); ?>">注册</a>/<a href="<?php echo url('auth/login'); ?>">登录</a> |<a href="<?php echo url('auth/lookfor'); ?>">找回密码</a>
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


<script>
$(function(){		
	$('.title-list li').click(function(){
		var liindex = $('.title-list li').index(this);
		$(this).addClass('on').siblings().removeClass('on');
		$('.menutab-wrap div.menutab').eq(liindex).fadeIn(150).siblings('div.menutab').hide();
		var liWidth = $('.title-list li').width();
		$('.shopcontent .title-list p').stop(false,true).animate({'left' : liindex * liWidth + 'px'},300);
	});
	
	$('.menutab-wrap .menutab li').hover(function(){
		$(this).css("border-color","#ff6600");
		$(this).find('p > a').css('color','#ff6600');
	},function(){
		$(this).css("border-color","#fafafa");
		$(this).find('p > a').css('color','#666666');
	});
	});
	var mt = 0;
window.onload = function () {
 var Topcart = document.getElementById("Topcart");
   var mt = Topcart.offsetTop;
    window.onscroll = function () {
     var t = document.documentElement.scrollTop || document.body.scrollTop;
      if (t > mt) {
      Topcart.style.position = "fixed";
        Topcart.style.margin = "";
         Topcart.style.top = "200px";
		 Topcart.style.right = "191px";
		 Topcart.style.boxShadow ="0px 0px 20px 5px #cccccc";
		 Topcart.style.top="0";
		 Topcart.style.border="1px #636363 solid";
         }
         else { 
         Topcart.style.position = "static";
		 Topcart.style.boxShadow ="none";
		 Topcart.style.border="";
          }
          }
        }
</script>
<!--
Author: DeathGhost
Author URI: http://www.deathghost.cn
-->
<!--Start content-->
<section class="Shop-index">
 <article>
  <div class="shopinfor">
   <div class="title">
    <img src="__UPLOAD_PATH__/wpjnewlogo.jpg" class="shop-ico">
    <span>含山路外婆家</span>
    <span>
     <img src="__IMG_PATH__/star-on.png">
     <img src="__IMG_PATH__/star-on.png">
     <img src="__IMG_PATH__/star-on.png">
     <img src="__IMG_PATH__/star-on.png">
     <img src="__IMG_PATH__/star-off.png">
    </span>
    <span>4.8</span>
   </div>
   <div class="imginfor">
    <div class="shopimg">
     <img src="__UPLOAD_PATH__/cc.jpg" id="showimg">
      <ul class="smallpic">
       <li><img src="__UPLOAD_PATH__/cc.jpg" onmouseover="show(this)" onmouseout="hide()"></li>
      </ul>
    </div>
    <div class="shoptext">
     <p><span>地址：</span>陕西省西安市雁塔区丈八北路***号</p>
     <p><span>电话：</span>029-88888888</p>
     <p><span>特色菜品：</span>毛肚、牛丸、滑虾、羊肉、香辣虾...</p>
     <p><span>优惠活动：</span>暂无信息</p>
     <p><span>停车位：</span>4个停车位（免费）</p>
     <p><span>营业时间：</span>09:00~22:00</p>
     <p><span>WIFI：</span>免费WIFI</p>
     <p><span>价格：</span>50元</p>
     <div class="Button">
      <a href="#ydwm"><span class="DCbutton">查看菜谱点菜</span></a>
     </div>
     <div class="otherinfor">
     <a href="#" class="icoa"><img src="__IMG_PATH__/collect.png">收藏店铺（1293）</a>
     <div class="bshare-custom"><a title="分享" class="bshare-more bshare-more-icon more-style-addthis">分享</a></div>
	 <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=1&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
     </div>
   </div>
  </div>
  <div class="shopcontent">
  <div class="title2 cf">
    <ul class="title-list fr cf ">
      <li class="on">菜谱</li>
      <li>累计评论（5）</li>
      <li>商家详情</li>
      <li>店铺留言</li>
      <p><b></b></p>
    </ul>
  </div>
  <div class="menutab-wrap">
   <a name="ydwm">
    <!--case1-->
    <div class="menutab show">
     <ul class="products">
		<li>
		 <a href="<?php echo url('meal/detailsp'); ?>" target="_blank" title="酸辣土豆丝">
         <img src="__UPLOAD_PATH__/01.jpg" class="foodsimgsize">
         </a>
          <a href="#" class="item">
		 <div>
		  <p>酸辣土豆丝</p>
		  <p class="AButton">拖至购物车:￥50.00</p>
		 </div>
		 </a>
		</li>
		<li>
		 <a href="<?php echo url('meal/detailsp'); ?>" target="_blank" title="酸辣土豆丝">
         <img src="__UPLOAD_PATH__/02.jpg" class="foodsimgsize">
         </a>
          <a href="#" class="item">
		 <div>
		  <p>酸辣土豆丝</p>
		  <p class="AButton">拖至购物车:￥50.00</p>
		 </div>
		 </a>
		</li>
		<li>
		 <a href="<?php echo url('meal/detailsp'); ?>" target="_blank" title="酸辣土豆丝">
         <img src="__UPLOAD_PATH__/04.jpg" class="foodsimgsize">
         </a>
          <a href="#" class="item">
		 <div>
		  <p>酸辣土豆丝</p>
		  <p class="AButton">拖至购物车:￥50.00</p>
		 </div>
		 </a>
		</li>
		<li>
		 <a href="<?php echo url('meal/detailsp'); ?>" target="_blank" title="酸辣土豆丝">
         <img src="__UPLOAD_PATH__/03.jpg" class="foodsimgsize">
         </a>
          <a href="#" class="item">
		 <div>
		  <p>酸辣土豆丝</p>
		  <p class="AButton">拖至购物车:￥50.00</p>
		 </div>
		 </a>
		</li>
       <div class="TurnPage">
     <a href="#">
      <span class="Prev"><i></i>首页</span>
     </a>
     <a href="#"><span class="PNumber">1</span></a>
     <a href="#"><span class="PNumber">2</span></a>
     <a href="#">
     <span class="Next">最后一页<i></i></span>
     </a>
    </div>
	 </ul>
    </div>
    </a>
    <!--case2-->
    <div class="menutab">
     <div class="shopcomment">
      <div class="Spname">
       <a href="#" target="_blank" title="酸辣土豆丝">酸辣土豆丝</a>
      </div>
      <div class="C-content">
       <q>还不错，速度挺快,还不错，速度挺快还不错，速度挺快还不错，速度挺快还不错，速度挺快还不错，速度挺快还不错，速度挺快。。。</q>
       <i>2014年09月17日 19:36 </i>
      </div>
      <div class="username">
      DeatGhost
      </div>
     </div>
    </div>
    <!--case4-->
    <div class="menutab">
     <div class="shopdetails">
     <div class="shopmaparea">
      <img src="__UPLOAD_PATH__/testimg.jpg"><!--此处占位图调用动态地图后将其删除即可-->
     </div>
     <div class="shopdetailsT">
      <p><span>店铺：外婆家</span></p>
      <p><span>地址：</span>陕西省西安市雁塔区丈八北路***号</p>
      <p><span>电话：</span>029-88888888</p>
      <p><span>乘车路线：</span>300路、115路、14路、800路到西辛庄站下车往东100米</p>
      <p><span>店铺介绍：</span>***于2005年3月28日开业，立于西安市碑林区***于2005年3月28日开业，立于西安市碑林区***于2005年3月28日开业，立于西安市碑林区***于2005年3月28日开业，立于西安市碑林区***</p>
     </div>
    </div>
    </div>
    <!--case5-->
    <div class="menutab">
     <span class="Ask"><i>DeathGhost</i>:这里是测试问答？</span>
     <span class="Answer"><i>管理员回复</i>：这里是测试回答！</span>

     <div class="TurnPage">
     <a href="#">
      <span class="Prev"><i></i>首页</span>
     </a>
     <a href="#"><span class="PNumber">1</span></a>
     <a href="#"><span class="PNumber">2</span></a>
     <a href="#">
     <span class="Next">最后一页<i></i></span>
     </a>
    </div>
    
     <form class="A-Message" action="#"> 
      <p><i>姓名：</i><input name="usr_name" type="text" autofocus placeholder="张三" required></p>
      <p><i>手机：</i><input name="" type="text" placeholder="15825518***" pattern="[0-9]{11}" required></p>
      <p><i>邮件：</i><input type="email" name="email" autocomplete="off" placeholder="admin@admin.com" required/></p>
      <p><i>问题补充：</i><textarea name="" cols="" rows="" required placeholder="详细说明您的问题..."></textarea></p>
      <p><input type="submit" class="Abutt" /></p>
     </form>
    </div>
  </div>
</div>
 </article>
 <aside>
  <div class="cart" id="Topcart">
	<span class="Ctitle Block FontW Font14"><a href="<?php echo url('cart/cart'); ?>" target="_blank">我的购物车</a></span>
	<table id="cartcontent" fitColumns="true">
	<thead>
	<tr>
	<th width="33%" align="center" field="name">商品</th>
	<th width="33%" align="center" field="quantity">数量</th>
	<th width="33%" align="center" field="price">价格</th>
	</tr>
	</thead>
	</table>
	<p class="Ptc"><span class="Cbutton"><a href="<?php echo url('cart/cart'); ?>" target="进入购物车">进入购物车</a></span><span class="total">共计金额: ￥0</span></p>
  </div>
  
  <div class="Nearshop">
   <span class="Nstitle">附近其他店铺</span>
   <ul>
    <li>
     <img src="__UPLOAD_PATH__/cc.jpg">
     <p>
     <span class="shopname" title="动态调用完整标题"><a href="<?php echo url('meal/detailsp'); ?>" target="_blank" title="肯德基">肯德基</a></span>
     <span class="Discolor">距离：1.2KM</span>
     <span title="完整地址title">地址：西安市雁塔区2000号...</span>
     </p>
    </li>
   </ul>
  </div>
  
  <div class="History">
   <span class="Htitle">浏览历史</span>
   <ul>
    <li>
    <a href="<?php echo url('meal/detailsp'); ?>" target="_blank" title="清真川菜馆"><img src="__UPLOAD_PATH__/cc.jpg"></a>
    <p>
     <span class="shopname" title="动态调用完整标题"><a href="<?php echo url('meal/detailsp'); ?>" target="_blank" title="正宗陕北小吃城">正宗陕北小吃城</a></span>
     <span>西安市莲湖区土门十西安市莲湖区土门十字西安市莲湖区土门十字.</span>
    </p>
    </li>
    <span>[ <a href="#">清空历史记录</a> ]</span>
   </ul>
  </div>
 </aside>
 
</section>
<!--End content-->

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
<<<<<<< HEAD:dingcan/application/index/view/public/layout.html
      Gid('s_county').value + "</h3>"
=======
      Gid('s_county').value + "</h3>";                 }

    $('#yzm').click(function(){
       var phone = $('.phone').val();
       $.get("<?php echo url('auth/yzm'); ?>",{phone:phone},function(data){
          console.log(data);
       });
       return false;
    })
>>>>>>> 96354f6530d43ae300a3edd239eb5a31cead3173:dingcan/application/index/view/tpublic/layout.html

</script>
