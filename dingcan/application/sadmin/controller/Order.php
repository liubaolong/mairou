<?php
namespace app\sadmin\controller;
use app\sadmin\controller\Auth;
use app\sadmin\model\Order as OrderModel;
use think\Request;
use think\Db;
use think\Paginator;
class Order extends Auth
{
		//订单查询
	public function order()
	{
		$list = OrderModel::orderlist();
		$this->assign('list',$list);
		return $this->fetch();
	}
	//订单详情
	public function morder()
	{
		$id = empty($_GET['id'])?'':$_GET['id'];
		$list = OrderModel::ordermessage($id);
		$this->assign('list',$list);
		return $this->fetch();
	}
	//订单删除
	public function orderdel()
	{
		$id = empty($_POST['id'])?'':$_POST['id'];
		$list = OrderModel::delorder($id);
		if ($list) {
			$data = ['errcode'=>1,'info'=>$list];
		} else {
			$data = ['errcode'=>0];
		}
		echo json_encode($data);
	}
	//回收站
	public function recyle()
	{
		$list = OrderModel::recyleorder();
		$this->assign('list',$list);
		return $this->fetch();
	}
	//卖家发货
	public function send()
	{
		$arr  = empty($_POST)?'':$_POST;
		$info = OrderModel::sendout($arr);
		if ($info) {
			$data = ['errcode'=>1,'info'=>$info];
		} else {
			$data = ['errcode'=>0];
		}
		echo json_encode($data);
	}
}