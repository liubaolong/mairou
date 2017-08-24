<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\wamp\www\mairou\dingcan\public/../application/sadmin\view\sindex\add.html";i:1503454327;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="__CSS_PATH__/pintuer.css">
<link rel="stylesheet" href="__CSS_PATH__/sadmin.css">
<script src="__JS_PATH__/jquery.js"></script>
<script src="__JS_PATH__/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加菜品</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('sindex/adddish'); ?>" enctype="multipart/form-data" onsubmit="return upload()">  
      <div class="form-group">
        <div class="label">
          <label>菜品名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" id="image1" name="file" onblur="image1()" value="+ 浏览上传"  style="float:left;">
        </div>
      </div>     
      
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50" id="classify" onblur="classify()">
              <option value="">请选择分类</option>
              <option value="川菜">川菜</option>
              <option value="湘菜">湘菜</option>
              <option value="东北菜">东北菜</option>
              <option value="鲁菜">鲁菜</option>
              <option value="苏菜">苏菜</option>
            </select>
            <div class="tips"></div>
          </div>
        </div>
      </if>
   
      <div class="form-group">
        <div class="label">
          <label>价格：</label>
        </div>
        <div class="field">
          <input type="text" class="input" id="pri" name="price" onblur="jiage()" value="" style="width:60px;"/>
        </div>
      </div>
       <div class="form-group">
        <div class="label">
          <label>剩余量：</label>
        </div>
        <div class="field">
          <input type="text" class="input" id="count" name="count" onblur="count()" value="" style="width:60px;"/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>积分：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="s_score" value="0" style="width:60px;"/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>特色菜：</label>
        </div>
        <div class="field">
          是<input type="radio" name="special" value="1">
          否<input type="radio" name="special" value="0" checked>
        </div>
      </div>
      
         <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="note" id="note" onblur="note()" style=" height:90px;resize:none;"></textarea>
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

<script type="text/javascript">console.log(11);
    //价格
    function jiage()
    {
      if ($("#pri").val() == '') {
        $("#pri").css('border','1px solid red');
        return false;
      } else {
        $("#pri").css('border','1px solid green');
        return true;
      }
    }
    //菜品描述
    function note()
    {
       if ($("#note").val() == '') {
        $("#note").css('border','1px solid red');
        return false;
      } else {
        $("#note").css('border','1px solid green');
        return true;
      }
    }
    //菜品分类
    function classify()
    {
        if ($("#classify").val() == '') {
        return false;
      } else {
        return true;
      }
    }
    //菜品图片
    function image1()
    {
       if ($("#image1").val() == '') {
        return false;
      } else {
        return true;
      }
    }
    //菜品剩余量    
    function count()
    {
       if ($("#count").val() == '') {
        $("#count").css('border','1px solid red');
        return false;
      } else {
        $("#count").css('border','1px solid green');
        return true;
      }
    }
    function upload()
    {
      if(jiage()&&note()&&classify()&&image1()&&count()){
        return true;
      }
      return false;
    }
</script>