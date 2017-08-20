<?php
	namespace app\admin\controller;
	use think\Controller;
	class Auth extends Controller{

		//登录
		public function login()
		{
			return $this->fetch();
		}
	}