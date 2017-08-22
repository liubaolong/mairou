<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\wamp\www\mairou\dingcan\public/../application/index\view\index\list.html";i:1503283797;s:78:"D:\wamp\www\mairou\dingcan\public/../application/index\view\public\layout.html";i:1503324306;}*/ ?>
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


<!--Start content-->
<section class="Psection">
 <section class="fslist_navtree">
  <ul class="select">
		<li class="select-list">
			<dl id="select1">
				<dt>分类：</dt>
				<dd class="select-all selected"><a href="javascript:">全部</a></dd>
				<dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
                <dd><a href="javascript:">火锅/干锅</a></dd>
			</dl>
		</li>
		<li class="select-list">
			<dl id="select2">
				<dt>位置：</dt>
				<dd class="select-all selected"><a href="javascript:">全部</a></dd>
				<dd><a href="javascript:">高新区</a></dd>
                <dd><a href="javascript:">未央区</a></dd>
                <dd><a href="javascript:">碑林区</a></dd>
                <dd><a href="javascript:">阎良区</a></dd>
                <dd><a href="javascript:">新城区</a></dd>
                <dd><a href="javascript:">雁塔区</a></dd>
                <dd><a href="javascript:">莲湖区</a></dd>
                <dd><a href="javascript:">灞桥区</a></dd>
                <dd><a href="javascript:">高陵区</a></dd>
                <dd><a href="javascript:">周至县</a></dd>
			</dl>
		</li>
		<li class="select-list">
			<dl id="select3">
				<dt>餐点：</dt>
				<dd class="select-all selected"><a href="javascript:">全部</a></dd>
				<dd><a href="javascript:">早餐</a></dd>
			</dl>
		</li>
        <li class="select-list">
			<dl id="select4">
				<dt>价位区间：</dt>
				<dd class="select-all selected"><a href="javascript:">全部</a></dd>
				<dd><a href="javascript:">20元以下</a></dd>
                <dd><a href="javascript:">20-40元</a></dd>
                <dd><a href="javascript:">40-60元</a></dd>
                <dd><a href="javascript:">60-80元</a></dd>
                <dd><a href="javascript:">80-100元</a></dd>
			</dl>
		</li>
		<li class="select-result">
			<dl>
			 <dd class="select-no">已选择：</dd>
			</dl>
		</li>
	</ul>
 </section>
<section class="Fslmenu">
 <a href="#" title="默认排序">
  <span>
  <span>默认排序</span>
  <span></span>
  </span>
 </a>
 <a href="#" title="评价">
  <span>
  <span>评价</span>
  <span class="s-up"></span>
  </span>
 </a>
 <a href="#" title="销量">
  <span>
  <span>销量</span>
  <span class="s-up"></span>
  </span>
 </a>
 <a href="#" title="价格排序">
  <span>
  <span>价格</span>
  <span class="s-down"></span>
  </span>
 </a>
 <a href="#" title="发布时间排序">
  <span>
  <span>发布时间</span>
  <span class="s-up"></span>
  </span>
 </a>
</section>
<section class="Fsl">
 <ul>
  <li>
   <a href="<?php echo url('shop/shop'); ?>" target="_blank" title="调用产品名/店铺名"><img src="__UPLOAD_PATH__/03.jpg"></a>
   <hgroup>
   <h3>【大明宫】***川菜馆</h3>
   <h4></h4>
   </hgroup>
   <p>菜系：川湘菜</p>
   <p>地址：西安市莲湖区土门十字往右100米</p>
   <p>人均：20~50元</p>
   <p>
    <span class="Score-l">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-off.png">
    <span class="Score-v">4.8</span>
    </span>
    <span class="DSBUTTON"><a href="<?php echo url('shop/shop'); ?>" target="_blank" class="Fontfff">点外卖</a></span>
   </p>
  </li>
  <li>
   <a href="<?php echo url('shop/shop'); ?>" target="_blank" title="调用产品名/店铺名"><img src="__UPLOAD_PATH__/03.jpg"></a>
   <hgroup>
   <h3>【大雁塔】***川菜馆</h3>
   <h4></h4>
   </hgroup>
   <p>菜系：川湘菜</p>
   <p>地址：西安市莲湖区土门十字往右100米</p>
   <p>人均：20~50元</p>
   <p>
    <span class="Score-l">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-off.png">
    <span class="Score-v">4.8</span>
    </span>
    <span class="DSBUTTON"><a href="<?php echo url('shop/shop'); ?>" target="_blank" class="Fontfff">点外卖</a></span>
   </p>
  </li>
  <li>
   <a href="<?php echo url('shop/shop'); ?>" target="_blank" title="调用产品名/店铺名"><img src="__UPLOAD_PATH__/03.jpg"></a>
   <hgroup>
   <h3>【南稍门】***川菜馆</h3>
   <h4></h4>
   </hgroup>
   <p>菜系：川湘菜</p>
   <p>地址：西安市莲湖区土门十字往右100米</p>
   <p>人均：20~50元</p>
   <p>
    <span class="Score-l">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-off.png">
    <span class="Score-v">4.8</span>
    </span>
    <span class="DSBUTTON"><a href="<?php echo url('shop/shop'); ?>" target="_blank" class="Fontfff">点外卖</a></span>
   </p>
  </li>
  <li>
   <a href="<?php echo url('shop/shop'); ?>" target="_blank" title="调用产品名/店铺名"><img src="__UPLOAD_PATH__/03.jpg"></a>
   <hgroup>
   <h3>【小雁塔】***川菜馆</h3>
   <h4></h4>
   </hgroup>
   <p>菜系：川湘菜</p>
   <p>地址：西安市莲湖区土门十字往右100米</p>
   <p>人均：20~50元</p>
   <p>
    <span class="Score-l">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-off.png">
    <span class="Score-v">4.8</span>
    </span>
    <span class="DSBUTTON"><a href="<?php echo url('shop/shop'); ?>" target="_blank" class="Fontfff">点外卖</a></span>
   </p>
  </li>
 </ul>
 <aside>
  <div class="title">热门商家</div>
  <div class="C-list">
   <a href="<?php echo url('shop/shop'); ?>" target="_blank" title="店铺名称"><img src="__UPLOAD_PATH__/cc.jpg"></a>
   <p><a href="<?php echo url('shop/shop'); ?>" target="_blank">[大雁塔]店铺名称</a></p>
   <p>
   <span>人均：20~50元</span>
   <span style=" float:right">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-off.png">
    <span class="ALscore">4.8</span>
   </span>
   </p>
  </div>
  <div class="C-list">
   <a href="<?php echo url('shop/shop'); ?>" target="_blank" title="店铺名称"><img src="__UPLOAD_PATH__/cc.jpg"></a>
   <p><a href="<?php echo url('shop/shop'); ?>" target="_blank">[大雁塔]店铺名称</a></p>
   <p>
   <span>人均：20~50元</span>
   <span style=" float:right">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-on.png">
    <img src="__IMG_PATH__/star-off.png">
    <span class="ALscore">4.8</span>
   </span>
   </p>
  </div>
 </aside>
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
</section>
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
      Gid('s_county').value + "</h3>";                 }

    $('#yzm').click(function(){
       var phone = $('.phone').val();
       $.get("<?php echo url('auth/yzm'); ?>",{phone:phone},function(data){
          console.log(data);
       });
       return false;
    })

</script>
