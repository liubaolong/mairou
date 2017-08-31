<?php
	namespace app\admin\controller;
	use think\Controller;
	use think\Request;
	use think\Session;
	use think\Db;
	use app\admin\model\Root as RootModel;
	class Auth extends Controller{
		
		protected $is_login = [''];
		protected $root;
		public function _initialize()
		{
			parent::_initialize();
			$this->root = new RootModel();
			if (!$this->checklogin() && $this->is_login[0] == '*') {
				$this->error('请先登录',url('sadmin/auth/login'));
				exit;
			} 
			if (session('admin')['rb_id'] != 1) {
				//获取控制器
				$rootinfo  = strtolower(Request::instance()->controller());
				//获取控制器的方法名
				$methodroot = Request::instance()->action();
				$method     =  $rootinfo . '/' . $methodroot;
				$root = session('admin');
				//查询管理员所有的角色
				$role = Db::name('ujuese')
					->alias('u') 
					->join('f_jues j','u.uj_jid = j.j_id')
					->join('f_root r','u.uj_uid = r.rb_id')
					->where('r.rb_id',session('admin')['rb_id'])
					->select();
					$arr = array();
				foreach($role as $key=>$value)
				{
					$arr[] = $value['uj_jid'];
				}
				$actioninfo = array();
				//查询所有角色下的权限
				foreach($arr as $key=>$value)
				{
					$perm =  Db::name('jrules')
							->alias('jr') 
							->join('f_jues j','jr.jr_jid = j.j_id')
							->join('f_rules r','jr.jr_rid = r.r_id')
							->where('j.j_id',$value)
							->select();
						if (!empty($perm)) {
							$re = $perm[0]['r_fields'];
								$actioninfo[] = $re;
						}

				}
				if (!in_array($rootinfo, $actioninfo)) {
				if (!in_array($method, $actioninfo) && $rootinfo != 'index' && $rootinfo != 'auth' && session('admin')['rb_id'] != 1) {
					$this->error('您没有权限');
					exit;
				}
			}
		}
			
		}
		public function checklogin()
		{
			return session('?admin');//真|jia 
		}
		//登录
		public function dologin()
		{
			$data = [
				'rb_username' => trim(input('userName')),
				'rb_password' => md5(trim(input('password')))
			];
			$result = $this->root->dologin($data);
			if ($result) {
				session('admin',$result->toArray());
				$this->success('登陆成功 ',url('admin/index/index'));
			} else {
				$this->error('登录失败',url('sadmin/auth/login'));
			}
		}
		//退出
		public function loginout()
		{
			if (session(null)) {
				$this->error('退出失败');
			} else {
				$this->success('退出成功', url('@sadmin/auth/login'));
			}
		}
	}