<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class Feedback extends Auth{
		//意见反馈
		public function feedback_list()
		{
			return $this->fetch();
		}
		//留言管理
		public function notes_list()
		{
			return $this->fetch();
		}
		
	}