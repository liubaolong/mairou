<?php
	namespace app\admin\controller;
	use think\Controller;
	class Index extends Controller{
		//主页显示
		public function index()
		{
			return $this->fetch();
		}
		
	}