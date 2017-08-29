<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class Admin extends Auth{
		protected $is_login = ['*'];
		//管理员添加
		public function admin_add()
		{
			return $this->fetch();
		}
		//管理员列表
		public function admin_list()
		{
			return $this->fetch();
		}
		//权限管理
		public function admin_permission()
		{
			return $this->fetch();
		}
		//添加权限
		public function admin_role()
		{
			return $this->fetch();
		}
		//角色权限
		public function admin_role_add()
		{
			return $this->fetch();
		}
	}
