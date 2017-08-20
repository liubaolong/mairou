<?php
	namespace app\admin\controller;
	use think\Controller;
	class Admin extends Controller{
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
		public function admin_role_add()
		{
			return $this->fetch();
		}
	}
