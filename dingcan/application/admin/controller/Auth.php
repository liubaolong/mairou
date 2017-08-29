<?php
	namespace app\admin\controller;
	use think\Controller;
	use think\Request;
	use think\Session;
	use app\admin\model\User as UserModel;
	class Auth extends Controller{
		
		protected $is_login = [''];
		protected $user;
		public function _initialize()
		{
			parent::_initialize();
			$this->user = new UserModel();
			if (!$this->checklogin() && $this->is_login[0] == '*') {
				$this->error('您还没有登录，请先登录',url('sadmin/auth/login'));
			}
		}
		public function checklogin()
		{
			return session('?admin');//真|jia 
		}
		//登录
		public function login()
		{
			return $this->fetch();
		}
		public function dologin()
		{
			$data = [
				'username' => trim(input('userName')),
				'password' => md5(trim(input('password')))
			];
			$result = $this->user->dologin($data);
			if ($result) {
				session('admin',$result->toArray());
				$this->success('登陆成功 ',url('admin/index/index'));
			} else {
				$this->error('您还没有登录，请先登录',url('sadmin/auth/login'));
			}
		}
		//退出
		public function loginout()
		{
			$data = [
				'uid' => session('admin')['uid'],
				'lasttime' => time()
			];
			session(null);
			$result = $this->user->loginout($data);
			if ($result) {
				$this->success('退出成功', url('@sadmin/auth/login'));
			} else {
				$this->error('退出失败');
			}
		}
	}