<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class Root extends Auth{
		protected $is_login = ['*'];
		public function user_error()
		{
			return $this->fetch();
		}
	}