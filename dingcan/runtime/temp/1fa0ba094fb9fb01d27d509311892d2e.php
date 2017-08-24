<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\wamp\www\mairou\dingcan\public/../application/sadmin\view\sindex\book.html";i:1503541130;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <link href="__STATIC_PATH__/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
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
  <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <tr>
          <td><input type="checkbox" name="id[]" value="<?php echo $v['p_id']; ?>" />
            </td>
          <td><?php echo $v['m_name']; ?></td>
          <td><?php echo $v['username']; ?></td>
          <td><?php echo $v['phone']; ?></td>        
          <td><?php echo $v['p_info']; ?></td>
          <td><?php echo date('Y-m-d',$v['p_addtime'])?></td>
          <td><div class="button-group"> <a class="button border-red" href="<?php echo url('sindex/rece'); ?>?id=<?php echo $v['p_id']; ?>" target="right" onclick="return del(1)"><span class="icon-trash-o"></span>回复</a> </div></td>
        </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>      

        <td colspan="8"><?php echo $res->render();; ?></td>
      </tr>
    </table>
  </div>
</form>
<!-- <script type="text/javascript">
  
</script> -->
</body></html>