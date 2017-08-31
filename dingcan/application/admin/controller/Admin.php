<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use app\admin\model\Admin as AdminModel; 
	class Admin extends Auth{
		protected $is_login = ['*'];
		//管理员添加
		public function admin_add()
		{
			$res = AdminModel::addadmin();
			$this->assign('res',$res);
			return $this->fetch();
		}
		//管理员信息添加
		public function addmessage()
		{
			$info = empty($_POST)?'':$_POST;
			$res = AdminModel::messageadd($info);
			if ($res) {
				$this->success('添加成功',url('admin/admin/admin_list'));
			} else {
				$this->error('添加失败',url('admin/admin/admin_list'));
			}
		}
		//查询管理员名
		public function check()
		{
			$user = empty($_POST['user'])?'':$_POST['user'];
			$result = AdminModel::checkupname($user);
			if ($result) {
				$data = ['errcode'=>1,'info'=>$result];
			} else {
				$data = ['errcode'=>0];
			}
			echo json_encode($data);
		}
		//管理员编辑
		public function admin_eidt()
		{
			$id = empty($_GET["id"])?'':$_GET["id"];
			$res = AdminModel::editadmin($id);
			$this->assign('res',$res);
			return $this->fetch();
		}
		//管理员信息修改
		public function admin_message()
		{
			$info = empty($_POST)?'':$_POST;
			$id = empty($_GET['id'])?'':$_GET['id'];
			$res  = AdminModel::adminalert($info,$id);
			if ($res) {
				$this->success('修改成功',url('admin/admin/admin_list'));
			} else {
				$this->error('修改失败',url('admin/admin/admin_list'));
			}
		}
		//管理员禁用
		public function admin_stop()
		{
			$id = empty($_POST['cid'])?'':$_POST['cid'];
			$res = AdminModel::stopadmin($id);
			if ($res) {
				$data = ['errcode'=>1,'info'=>$res];
			} else {
				$data = ['errcode'=>0];
			}
			echo json_encode($data);
		}
		//管理员删除
		public function admin_del()
		{
			$id = empty($_POST['cid'])?'':$_POST['cid'];
			$res = AdminModel::deladmin($id);
			if ($res) {
				$data = ['errcode'=>1,'info'=>$res];
			} else {
				$data = ['errcode'=>0];
			}
			echo json_encode($data);
		}
		//管理员列表
		public function admin_list()
		{
			$result = AdminModel::listadmin();
			$this->assign('res',$result);
			return $this->fetch();
		}
		//角色管理
		public function admin_role()
		{ 
			$res = AdminModel::roleadmin();
			$this->assign('res',$res);
			return $this->fetch();
		}
		//角色添加
		public function role_add()
		{
			$info = empty($_POST)?'':$_POST;
			$res  = AdminModel::addrole($info);
			if ($res) {
				$this->success('添加成功',url('admin/admin/admin_role'));
			} else {
				$this->error('添加失败',url('admin/admin/admin_role'));
			}
		}
		//角色详情
		public function role_message()
		{
			$id  = empty($_POST['id'])?'':$_POST['id'];
			$res = AdminModel::messagerole($id);
			if ($res) {
				$data = ['errcode'=>1,'info'=>$res];
			} else {
				$data = ['errcode'=>0];
			}
			echo json_encode($data);
		}
		//角色编辑
		public function role_edit()
		{	
			$info = empty($_POST)?'':$_POST;
			$res  = AdminModel::editrole($info);
			 if ($res) {
				$this->success('修改成功',url('admin/admin/admin_role'));
			} else {
				$this->error('修改失败',url('admin/admin/admin_role'));
			}
		} 
		//角色权限
		public function admin_role_add()
		{
			return $this->fetch();
		}
		//角色删除
		public function delrole()
		{
			$id  = $_POST['cid'];
			$res = AdminModel::roledel($id);
			if ($res) {
				$data = ['errcode'=>1,'info'=>$res];
			} else {
				$data = ['errcode'=>0];
			}
			echo json_encode($data);
		}	
		//权限管理
		public function admin_permission()
		{
			$res = AdminModel::permissionadmin();
			$this->assign('res',$res);
			return $this->fetch();
		}	
		 //权限添加
		public function add_permission()
		{	
			$info = empty($_POST)?'':$_POST;
			$res  = AdminModel::permissionadd($info);
			if ($res) {
				$this->success('添加成功',url('admin/admin/admin_permission'));
			} else {
				$this->error('添加失败',url('admin/admin/admin_permission'));
			}
		}
		//权限详情
		public function message_permission()
		{
			$id  = empty($_POST['cid'])?'':$_POST['cid'];
			$res = AdminModel::permissionmessage($id);
			if ($res) {
				$data = ['errcode'=>1,'info'=>$res];
			} else {
				$data = ['errcode'=>0];
			}
			echo json_encode($data);
		}
		//权限修改
		public function edit_permission()
		{
			$info = $_POST;
			$res = AdminModel::permissioneidt($info);
			if ($res) {
				$this->success('修改成功',url('admin/admin/admin_permission'));
			} else {
				$this->error('修改失败',url('admin/admin/admin_permission'));
			}
		}
		//权限删除
		public function del_permission()
		{
			$id = $_POST['cid'];
			$res= AdminModel::permissiondel($id);
			if ($res) {
				$data = ['errcode'=>1,'info'=>$res];
			} else {
				$data = ['errcode'=>0];
			}
			echo json_encode($data);
		}
	}
