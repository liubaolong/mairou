<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class User extends Auth{
		public function user_error()
		{
			return $this->fetch();
		}
	}