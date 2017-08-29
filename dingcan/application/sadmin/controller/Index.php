<?php
namespace app\sadmin\controller;
use app\sadmin\controller\Auth;
use app\sadmin\controller\Sindex as Sindex;
class index extends Auth
{
	protected $is_login = ['*'];
	public function index()
	{
		$this->assign('title', '后台登录');
		return $this->fetch('sadmin@auth/login');
	}
}