<?php
namespace app\sadmin\controller;
use think\Controller;
use app\sadmin\model\Auth as AuthModel;
class Auth extends Controller
{
	// 初始化
	protected $is_login = [''];
	public function _initialize()
	{
		if (!$this->checklog() && $this->is_login[0] == '*')
		{
			$this->error('请先登录', url('sadmin/auth/login'));
		}
	}
	//检查商家是否登录
	public function checklog()
	{
		return session('?sadmin');
	}
	//商家后台登录
	public function login()
	{
		if(!empty($_POST)){
			$result = AuthModel::checklogin($_POST);
			switch ($result) {
				case 1:
				$this->success('登陆成功 ',url('sadmin/sindex/sindex'));
				break;
				case 2:
				$this->error('用户不存在 ',url('sadmin/auth/login'));
				break;
				case 3:
				$this->error('密码错误或商家不存在 ',url('sadmin/auth/login'));
				break;
			} 
		}
		$this->assign('title','后台管理');
		return $this->fetch();
	}
	//商家后台退出
	public function logout()
	{
		session(null);
		$this->error('请先登录',url('sadmin/auth/login'));
	}
}