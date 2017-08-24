<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\wamp\www\mairou\dingcan\public/../application/sadmin\view\sindex\info.html";i:1503410848;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="__CSS_PATH__/pintuer.css">
    <link rel="stylesheet" href="__CSS_PATH__/sadmin.css">
    <script src="__JS_PATH__/jquery.js"></script>
    <script src="__JS_PATH__/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 店铺信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('sindex/alertinfo'); ?>" enctype="multipart/form-data" onsubmit="return upload()">
      <div class="form-group">
        <div class="label">
          <label>店铺名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="stitle" id="stitle" onblur="shop()" value="<?php echo $arr['s_name']; ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>店铺图片：</label>
        </div>
        <div class="field">
          <img src="<?php echo $arr['s_pic']; ?>" style="height:200px;width:200px;">
          <input type="file"  id="image1" name="file"  >
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>店铺电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="surl" id="surl" onblur="phone()" value="<?php echo $arr['s_phone']; ?>" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>营业时间：</label>
        </div>
        <div class="field">
          <span><?php echo $arr['s_time']; ?></span>
            <select name="time">
              <option value="<?php echo $arr['s_time']; ?>">营业时间</option>
              <option value="8:00-20:00">8:00-20:00</option>
              <option value="8:00-21:00">8:00-21:00</option>
              <option value="8:00-22:00">8:00-22:00</option>
              <option value="8:00-23:00">8:00-23:00</option>
              <option value="8:00-24:00">8:00-24:00</option>
            </select>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>wifi：</label>
        </div>
        <div class="field">
            有<input type="radio" name="wifi" value="1" <?php echo $arr['s_wifi']==1? 'checked':''; ?> >
            无<input type="radio" name="wifi" value="2" <?php echo $arr['s_wifi']==2? 'checked':''; ?> >
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>身份证</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="ident" value="<?php echo $arr['s_ident']; ?>" readonly/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>店铺地址：</label>
        </div>
        <div class="field">
          <textarea class="input" name="sdescription" id="sdescription" onblur="address()" style="resize:none;"><?php echo $arr['s_address']; ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      
        <div class="form-group">
        <div class="label">
          <label>店铺简介：</label>
        </div>
        <div class="field">
          <textarea class="input" name="info" id="info" onblur="info()" style="resize:none;"><?php echo $arr['s_info']; ?></textarea>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
    //商家名称判断
    function shop()
    {
      if ($("#stitle").val() == '') {
             $("#stitle").css('border','1px solid red');
             return false;
        } else {
             $("#stitle").css('border','1px solid green');
             return true;
        }
    }
    //判断商家电弧
    function phone()
    {
       if ($("#surl").val() == '') {
             $("#surl").css('border','1px solid red');
             return false;
        } else {
             $("#surl").css('border','1px solid green');
             return true;
        }
    }
    //判断地址
    function address()
    {
       if ($("#sdescription").val() == '') {
             $("#sdescription").css('border','1px solid red');
             return false;
        } else {
             $("#sdescription").css('border','1px solid green');
             return true;
        }
    }
    //判断简介
     function info()
    {
       if ($("#info").val() == '') {
             $("#info").css('border','1px solid red');
             return false;
        } else {
             $("#info").css('border','1px solid green');
             return true;
        }
    }
    function upload()
    {
      if(shop()&&phone()&&address()&&info){
        return true;
      }
      return false;
    }
</script>