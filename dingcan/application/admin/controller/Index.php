<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class Index extends Auth{
		protected $is_login = ['*'];
		//主页显示
		// public function index()
		// {
		// 	return $this->fetch();
		// }
		public function index()
		{
			return $this->fetch('article/article_list');
		}

	}