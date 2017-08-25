<?php
namespace app\index\controller;
use think\Controller;
class Order extends Controller
{
	//我的订单
	public function order()
	{
		return $this->fetch();
	}
	//确认订单
	public function confirm()
	{
		return $this->fetch();
	}
	//订单状态
	public function respond()
	{
		return $this->fetch();
	}
	//我的订单表
	public function orderlist()
	{
		//未登录用户不能进入该页面
		if (!session('?uid')) {
			$this->success('请先登录', 'auth/login');
		}
		return $this->fetch();
	}
}