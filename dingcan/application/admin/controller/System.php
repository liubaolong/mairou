<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class System extends Auth{
		protected $is_login = ['*'];
		//系统设置
		public function system_base()
		{
			$check = (int)config('view_replace_str')['__WEB_ISCLOSE__'];
			// dump($check);die;
			$this->assign('check', $check);
			return $this->fetch();
		}
		//栏目管理
		public function system_category()
		{
			return $this->fetch();
		}
		//数据字典
		public function system_data()
		{
			return $this->fetch();
		}
		//屏蔽词
		public function system_shielding()
		{
			return $this->fetch();
		}
		//系统日志
		public function system_log()
		{
			return $this->fetch();
		}
		//添加栏目
		public function system_category_add()
		{
			return $this->fetch();
		}
		//修改站点信息
		public function updWeb(){
			
			$str = file_get_contents(CONF_PATH.'config.php');
			foreach (input() as $key => $val) {
				if($key=='WEB_ISCLOSE'){
					$pattern="/'__".$key."__'=>.*?,/";
					$replace="'__".$key."__'=>$val,";
				}else{
					$pattern="/'__".$key."__'=>'.*?',/";
					$replace="'__".$key."__'=>'$val',";
				}
				$str=preg_replace($pattern, $replace, $str);
			}
			file_put_contents(CONF_PATH.'config.php',$str);
			$this->success('修改站点信息成功');
		}
			
	}