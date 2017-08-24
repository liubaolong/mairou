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
			// dump(__DIR__);die;
			// dump(
			// $confpath = config('view_replace_str')['__CONF_PATH__'];
			// dump(input());die;
			/*if (!empty(input())) {
				$str = file_get_contents("$confpath/config.php");
				dump($str);die;
			} else {
				dump(2);die;
			}*/
			/*$isip = config('view_replace_str')['__WEB_ISCLOSE__'];
			// dump(config('view_replace_str'));
			if ($isip) {
				config('view_replace_str')['__WEB_ISCLOSE__'] = false;
				// $isip = false;
			} else {
				config('view_replace_str')['__WEB_ISCLOSE__'] = true;
				// $isip = trueo;
			}*/
			/*config('view_replace_str');die;
			if (!empty(input())) {
				$str = file_get_contents('config.php');
				foreach($_POST as $key=>$val){
					
					if($key=='WEB_ISCLOSE'){
						$pattern="/define\('$key',.*?\);/";
						$replace="define('$key',$val);";
					}else{
						$pattern="/define\('$key','.*?'\);/";
						$replace="define('$key','$val');";
					}
					$str=preg_replace($pattern, $replace, $str);
				}
				file_put_contents('config.php',$str);
				$this->notice('修改站点信息成功');
			}*/
		}
			
	}