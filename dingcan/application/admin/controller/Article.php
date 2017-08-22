<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class Article extends Auth{
		//资讯管理
		public function article_list()
		{
			return $this->fetch();
		}
		//添加咨询
		public function article_add()
		{
			return $this->fetch();
		}
	}