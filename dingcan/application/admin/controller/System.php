<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class System extends Auth{
		//系统设置
		public function system_base()
		{
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
		
	}