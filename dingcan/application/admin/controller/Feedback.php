<?php
	namespace app\admin\controller;
	use think\Controller;
	class Feedback extends Controller{
		//意见反馈
		public function feedback()
		{
			return $this->fetch();
		}
		//留言管理
		public function notes_list()
		{
			return $this->fetch();
		}
		
	}