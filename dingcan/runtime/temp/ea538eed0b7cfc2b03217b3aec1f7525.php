<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\Wamp\wamp\www\mairou\dingcan\public/../application/index\view\auth\register.html";i:1503399511;s:83:"D:\Wamp\wamp\www\mairou\dingcan\public/../application/index\view\public\layout.html";i:1503390646;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>肉肉外卖网</title>

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


<!--Start content-->
<section class="Psection MT20">
<h2 style="padding-left:300px;">注册：</h2>
 <form action="<?php echo url('auth/reg'); ?>" method="post" id="form1">
  <table class="Register">
  <tr>
  <td width="40%" align="right" class="FontW">用户名：</td>
  <td><input type="text" name="uname" required autofocus>
  <span style="color:red;" id="uname">
  
  </span>
  
  </td>
  
  </tr>
  <tr>
  <td width="40%" align="right" class="FontW">密码：</td>
  <td><input type="password" name="pwd" id="pwd" required pattern="[a-zA-Z]{1}([a-zA-Z0-9]|[._]){4,19}"></td>
  </tr>
  <tr>
  <td width="40%" align="right" class="FontW">再次确认：</td>
  <td><input type="password" name="repwd" id="repwd" required>
      <span style="color:red;" id="uname">
  
      </span>
  </td>
  </tr>
  <tr>
  <td width="40%" align="right" class="FontW">电子邮件：</td>
  <td><input type="email" name="uemail" required></td>
  </tr>
  <tr>
  <td width="40%" align="right" class="FontW">手机号码：</td>
  <td><input type="text" name="phone" class="phone" required pattern="1[34578]\d{9}"><input type="button" value="获取验证码" class="btn" id="pyzm"</td>
  </tr>
  <tr>
  <td width="40%" align="right" class="FontW">手机校验码：</td>
  <td><input type="text" name="dxyzm" id="dxyzm" required pattern="[0-9]{4}">
     <span style="color:red;" id="uname">
  
      </span></td>
  </tr>
  <tr>
  <td width="40%" align="right" class="FontW">验证码：</td>
  <td><input type="text" name="yzm" id="yzm" required><img src="<?php echo captcha_src(); ?>" style="margin-left:8px; vertical-align:bottom" width="83" height="36" onclick="this.src=this.src"/>
    <span style="color:red;" id="ts">
  
      </span>
  </td>
  </tr>
  <tr>
  <td width="40%" align="right"></td>
  <td><input type="submit" name="" class="a" value="注 册">( 已经是会员，<a href="<?php echo url('auth/login'); ?>" class="BlueA">请登录</a> )</td>
  </tr>
  </table>
 </form>
</section>
<!--End content-->
<script type="text/javascript">
window.onload = function(){

  var flag = new Array();
  var info1 = $('#uname');
  var dxyzm = $('#dxyzm');
  var yzm = null;
  var dx = null;
  //判断用户是否存在

  $("input[name='uname']").blur(function(){
    if ($(this).val() == '') {
      // info1.html('不能为空');
      flag['uname'] = false;
    } else {
        $.post("<?php echo url('auth/isuser'); ?>", {uname:$(this).val()}, function(data){
            if (data.errorcode) {
              info1.html(data.info);
              flag['uname'] = false;
            } else {
               
              flag['uname'] = true;
              info1.html(data.info);
            }
        }, 'json');
    }
  });
    //两次密码是否一致
    $("input[name='repwd']").blur(function(){ 
      if ($(this).val() != $('#pwd').val()) {
        flag['repwd'] = false;
        $("input[name='repwd']").next().text('两次密码不一致');
      } else {
        flag['repwd'] = true;
      }
    });
   
    
   $("input").focus(function(){
    $(this).next().html('');
  });
  $('#pyzm').click(function(){
       var phone = $('.phone').val();
       $.post("<?php echo url('auth/sendPhoneCode'); ?>",{phone:phone},function(data){
          if (data) {
            dx = data;
            console.log(dx);
            alert('发送成功');
          } else {
            alert('发送失败');
          }
       },'json');
       return false;
    }); 
  //手机验证码是否正确
  $("input[name='dxyzm']").blur(function(){
    if ($(this).val() != dx) {
      $(this).next().html('短信验证码输入错误');
      flag['dxyzm'] = false;
    } else {
      flag['dxyzm'] = true;
    }
  });
  //判断验证码是否正确
  $('#yzm').blur(function(){
    var ts = $('#ts');
    yzm = $('#yzm').val();
    $.post("<?php echo url('auth/yzm'); ?>", {yzm:yzm}, function(data){
        if (data.code == 1) {
          ts.text('');
          flag['yzm'] = true;
        } else {
          // alert(data.msg);
          ts.text(data.msg);
          flag['yzm'] = false;
        }
    },'json');
  });
  //判断flag
  function isBool()
  {
     if (flag['uname'] && flag['repwd'] && flag['dxyzm'] && flag['yzm']) {
      return true;
    } else {
       return false;
    }
  }
  //提交拦截
  $("#form1").submit(function(){
    return isBool();
  });

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
      Gid('s_county').value + "</h3>"

</script>
