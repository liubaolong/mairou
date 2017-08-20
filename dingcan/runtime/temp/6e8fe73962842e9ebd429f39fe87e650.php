<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"D:\wamp\www\dingcan\dingcan\public/../application/index\view\user\account.html";i:1503105631;s:79:"D:\wamp\www\dingcan\dingcan\public/../application/index\view\public\layout.html";i:1503212003;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>DeathGhost-用户中心</title>
<meta name="keywords" content="DeathGhost,DeathGhost.cn,web前端设,移动WebApp开发" />
<meta name="description" content="DeathGhost.cn::H5 WEB前端设计开发!" />
<meta name="author" content="DeathGhost"/>
<link href="__CSS_PATH__/style.css" rel="stylesheet" type="text/css" />
<link href="__STATIC_PATH__/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__JS_PATH__/public.js"></script>
<script type="text/javascript" src="__JS_PATH__/jquery.js"></script>
<script type="text/javascript" src="__JS_PATH__/jqpublic.js"></script>
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
<section class="Psection MT20">
<nav class="U-nav Font14 FontW">
  <ul>
    <li><i></i><a href="<?php echo url('user/user'); ?>">用户中心首页</a></li>
   <li><i></i><a href="<?php echo url('order/orderlist'); ?>">我的订单</a></li>
   <li><i></i><a href="<?php echo url('user/address'); ?>">收货地址</a></li>
   <li><i></i><a href="<?php echo url('message/message'); ?>">我的留言</a></li>
   <li><i></i><a href="<?php echo url('user/coupon'); ?>">我的优惠券</a></li>
   <li><i></i><a href="<?php echo url('user/favorites'); ?>">我的收藏</a></li>
   <li><i></i><a href="<?php echo url('user/account'); ?>">账户管理</a></li>
   <li><i></i><a href="#">安全退出</a></li>
  </ul>
 </nav>
 <article class="U-article Overflow">
  <!--user Account-->
  <section class="AccManage Overflow">
   <span class="AMTitle Block Font14 FontW Lineheight35">账户管理</span>
   <p>登陆邮箱：232***413@qq.com ( <a href="#" target="_blank">更换手机号码</a> )</p>
   <p>手机号码：183****5673 ( <a href="#" target="_blank">更换手机号码</a> ) ( <a href="#" target="_blank">解绑手机</a> )</p>
   <p>上次登陆：2014年09月22日 11:40:36( *如非本人登陆，请立即<a href="#" target="_blank">修改您的密码</a>！ )</p>
   <form>
    <table>
    <tr>
    <td width="30%" align="right">*修改头像：</td>
    <td><input name="" type="file"><button>确定</button></td>
    </tr>
    <tr>
    <td width="30%" align="right">*昵称：</td>
    <td><input type="text" name="" value="DeathGhost"></td>
    </tr>
    <tr>
    <td width="30%" align="right">*邮箱：</td>
    <td><input type="email" name="" value="232650413@qq.com"></td>
    </tr>
    <tr>
    <td width="30%" align="right">*手机：</td>
    <td><input type="tel" name="" value="18309275673"></td>
    </tr>
    <tr>
    <td></td>
    <td><input name="" type="submit" value="保 存"></td>
    </tr>
    </table>
   </form>
  </section>
 </article>
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
      Gid('s_county').value + "</h3>"                 }

    $('#yzm').click(function(){
       var phone = $('.phone').val();
       $.get("<?php echo url('auth/yzm'); ?>",{phone:phone},function(data){
          console.log(data);
       });
       return false;
    })

</script>
