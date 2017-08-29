<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use app\admin\model\Member as MemberModel;
	class Member extends Auth
	{
		protected $is_login = ['*'];
		//会员列表
		public function member_list()
		{
			$result = MemberModel::user();
			$this->assign('user',$result);
			return $this->fetch();
		}
		//会员禁用//会员启用
		public function userstop()
		{
			$id = empty($_POST['uid'])?'':$_POST['uid'];
			$result = MemberModel::disable($id);
			if ($result) {
				$data = ['errcode'=>1,'info'=>$result];
			} else {
				$data = ['errcode'=>0];
			}
			echo json_encode($data);
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