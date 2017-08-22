<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class Member extends Auth{
		//会员列表
		public function member_list()
		{
			return $this->fetch();
		}
		//会员添加
		public function member_add()
		{
			return $this->fetch();
		}
		//删除的会员
		public function member_del()
		{
			return $this->fetch();
		}
		//会员等级（暂时没有）

		//浏览记录
		public function member_record_browse()
		{
			return $this->fetch();
		}
		//下载记录
		public function member_record_download()
		{
			return $this->fetch();
		}
		//分享记录
		public function member_record_share()
		{
			return $this->fetch();
		}
		
		
	}