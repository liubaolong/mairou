<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\wamp\www\mairou\dingcan\public/../application/sadmin\view\sindex\list.html";i:1503496818;}*/ ?>
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
<script src="__JS_PATH__/jquery.js"></script>
<script src="__JS_PATH__/pintuer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 菜品管理</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="add.html"> 添加内容</a> </li>
        <li>搜索：</li>
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
      </ul>
    </div>
    <table class="table table-hover text-center" style="width:100%;">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <th>图片</th>
        <th>名称</th>
        <th>分类名称</th>
        <th>库存</th>
        <th width="10%">更新时间</th>
        <th width="310">操作</th>
      </tr>
	<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
        <tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="<?php echo $v['m_id']; ?>" />
           </td>

          <td width="10%"><img src="<?php echo $v['m_pic']; ?>" alt="" width="70" height="50" /></td>
          <td><?php echo $v['m_name']; ?></td>
          <td>产品分类</td>
          <td><?php echo $v['m_counts']; ?></td>
          <td><?php echo date('Y-m-d',$v['m_addtime'])?></td>
          <td><div>
          <?php if($v['m_isput'] == 1): ?>
	           <a  href="javascript:;" id="up"  value="<?php echo $v['m_id']; ?>" onclick="amend(this)">已下架</a>
           <?php else: ?>
	            <a  href="javascript:;" id="up"  value="<?php echo $v['m_id']; ?>" onclick="amend(this)">已上架</a>
	          
           <?php endif; ?>
            | <a  href="<?php echo url('sadmin/sindex/details'); ?>?mid=<?php echo $v['m_id']; ?>" ">详情</a>
           </div></td>
        </tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
        <td colspan="7"><div class="pagelist"><a href="<?php echo url('sindex/list'); ?>">首页</a> <a href="<?php echo url('sindex/list'); ?>?page=<?php echo $page['prepage']; ?>">上一页</a><a href="<?php echo url('sindex/list'); ?>?page=<?php echo $page['nextpage']; ?>" >下一页</a><a href="<?php echo url('sindex/list'); ?>?page=<?php echo $page['lastpage']; ?>" >尾页 </a> </div></td>
      </tr>

    </table>
  </div>
</form>
<script type="text/javascript">
	//上下架
	function amend(obj)
	{
		var id = $(obj).attr('value'); 
		$.post("<?php echo url('sadmin/sindex/amend'); ?>",{m_id:id},function(data){
			if(data['error'] == 1){
				switch(data['info']){
					case 1:
					$(obj).html('已上架');
					break;
					case 2:
					$(obj).html('已下架');
					break;
				}
			}
			
		},'json')
	}
</script>
</body>
</html>