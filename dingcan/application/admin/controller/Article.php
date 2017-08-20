<?php
	namespace app\admin\controller;
	use think\Controller;
	class Article extends Controller{
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