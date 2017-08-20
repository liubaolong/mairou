<?php
namespace app\index\controller;
use think\Controller;
class User extends Controller
{
	//用户中心
	public function user()
	{
		return $this->fetch();
	}
	//我的收藏
	public function favorites()
	{
		return $this->fetch();
	}
	//我的地址
	public function address()
	{
		return $this->fetch();
	}
	//账户管理
	public function account()
	{
		return $this->fetch();
	}
	//优惠劵
	public function coupon()
	{
		return $this->fetch();
	}
}