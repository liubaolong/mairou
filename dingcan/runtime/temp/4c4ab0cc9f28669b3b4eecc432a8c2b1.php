<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\wamp\www\mairou\dingcan\public/../application/sadmin\view\auth\login.html";i:1503393490;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
		<script src="__JS_PATH__/jquery-1.7.1.min.js"></script>
		<script src="__JS_PATH__/login-xin.js"></script>
		<link href="__CSS_PATH__/login.css" rel="stylesheet" type="text/css" />
	</head>
	<body onLoad="createCode();">      
<div class="login">
			<div class="login-head">
				<div class="login-head-a">
					<img src="__IMG_PATH__/a.jpg" title="" alt=""/>
						<p>锅包肉</p>
				</div>
				<div class="login-head-b">
					后台登录管理
				</div>
			</div>
			<div class="login-con">
				<div class="login-a">
					<form id="loginForm" method="POST" action="<?php echo url('auth/login'); ?>" onsubmit="return validate()">
                      <div class="login-b">
                      	<div class="login-b-a">用户登陆</div>
                      	<div class="login-b-b">
                      		<ul>
                      			<li>
                      				<label for="userName" >用户名：</label><input type="text" id="mobile" name="userName"/>

                      				<h1 id="m-tip"></h1>
                      			</li>
                      			<li>
                      				<label for="password">密 &nbsp;&nbsp;码：</label><input type="password" id="password" name="password"/>
                      				<h1 id="p-tip"></h1>
                      			</li>
                      			<li>
                      				<label >验证码：</label><input type="text" id="input1" />      
                                    <input type="text" id="checkCode" class="code" style="width: 55px" /> <a href="#" onClick="createCode()">看不清楚</a>   

                                    <h1 id="c-tip"></h1>
                      					
                      				<!--输入错误时的输入框样式<input type="text" name="textfield" id="textfield" class="receSum-error" />-->
                                   <!--当输入的手机号码发生错误时，出现如下提示信息
                                   <p class="error-tips-1 spanRed">在此处显示错误的信息提示——如：对不起，您输入的手机号码格式有误，请重新输入！</p>-->
                      				
                      			</li>
                      			<li>
                                  <input type="radio" name="shop" value="1" onclick="sact()" style="width:20px;" checked>商家 
                                  <input type="radio" name="shop" value="2" onclick="aact()" style="width:20px;">管理员
                            </li>

                      			<li class="login-x">
		                          <div class="login-x-a"><input type="submit" name="登录" value="登录" id="Button1" onClick="validate();"/><div class="x"></div></div>
	                            </li>
                      			
                      		</ul>
                      	</div>
                      </div>
					</form>
				</div>
			</div>
			<div class="login-foot">
				锅包肉订餐有限公司©2014 浙ICP备12040171号  
			</div>
		</div>
</body>    
</html>
<script type="text/javascript">
//商家登录跳转地址
  function sact()
  {
    $("#loginForm").attr({action:"<?php echo url('auth/login'); ?>"}) ;
  }
//管理员登录跳转地址
  function aact()
  {
    $("#loginForm").attr({action:"<?php echo url('admin/auth/dologin'); ?>"}) ;
  }
</script>
