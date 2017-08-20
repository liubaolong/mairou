<?php
	namespace app\admin\controller;
	use think\Controller;
	class User extends Controller{
		public function user_error()
		{
			return $this->fetch();
		}
	}