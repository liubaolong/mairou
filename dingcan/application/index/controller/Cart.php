<?php
namespace app\index\controller;
use think\Controller;
class Cart extends Controller
{
	public function cart()
	{
		//未登录用户不能进入该页面
		if (!session('?uid')) {
			$this->success('请先登录', 'auth/login');
		}
		return $this->fetch();
	}
}