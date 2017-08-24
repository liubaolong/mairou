<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\wamp\www\mairou\dingcan\public/../application/sadmin\view\sindex\book.html";i:1503495519;}*/ ?>
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
    <script src="__JS_PATH__/sjquery.js"></script>
    <script src="__JS_PATH__/pintuer.js"></script>  
</head>
<body>
<form method="post" action="">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>菜品</th>
        <th>姓名</th>       
        <th>电话</th>
        <th width="25%">内容</th>
         <th width="120">留言时间</th>
        <th>操作</th>       
      </tr>  

        <tr>
          <td><input type="checkbox" name="id[]" value="1" />
            1</td>
          <td></td>
          <td>神夜</td>
          <td>13420925611</td>        
          <td>这是一套后台UI，喜欢的朋友请多多支持谢谢。</td>
          <td>2016-07-01</td>
          <td><div class="button-group"> <a class="button border-red" href="<?php echo url('sindex/rece'); ?>" target="right" onclick="return del(1)"><span class="icon-trash-o"></span>回复</a> </div></td>
        </tr>
        

        <td colspan="8"><div class="pagelist"> <a href="javascript:;" >首页</a> <a href="javascript:;">上一页</a> <span class="current">1</span><a href=javascript:;"">2</a><a href="">3</a><a href="javascript:;">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<!-- <script type="text/javascript">
  
</script> -->
</body></html>