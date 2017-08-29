<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use app\admin\model\Picture as PictureModel;
	class Picture extends Auth{
		protected $is_login = ['*'];
		//图片列表
		public function picture_list()
		{
			return $this->fetch();
		}
		//图片添加
		public function picture_add()
		{
			return $this->fetch();
		}
		//图片展示
		public function picture_show()
		{
			return $this->fetch();
		}
	}
