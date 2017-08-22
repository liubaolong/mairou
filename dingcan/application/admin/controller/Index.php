<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class Index extends Auth{
		//主页显示
		public function index()
		{
			return $this->fetch();
		}

	}