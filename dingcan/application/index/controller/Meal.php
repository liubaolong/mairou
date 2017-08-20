<?php
	namespace app\index\controller;
	use think\Controller;
	class Meal extends Controller{

		//菜品详情
		public function detailsp()
		{
			return $this->fetch();
		}
		//搜索菜品
		public function search_p()
		{
			return $this->fetch();
		}
	}
