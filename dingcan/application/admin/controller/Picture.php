<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use app\admin\model\Picture as PictureModel;
	class Picture extends Auth{
		protected $is_login = ['*'];
		//图片列表
		public function picture_list()
		{
			$res = PictureModel::plist();
			$this->assign('res',$res);
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
			$id  = empty($_GET['id'])?'':$_GET['id'];
			$res = PictureModel::pshow($id);
			$this->assign('result',$res);
			return $this->fetch();
		}
		//轮播图审核
		public function apply()
		{
			$id  = empty($_GET['id'])?'':$_GET;
			$res = PictureModel::papply($id);
			if ($res) {
				$this->success('通过审核',url('admin/picture/picture_list'));
			} else {
				$this->error('审核失败',url('admin/picture/picture_list'));
			}
		}
		//轮播图删除
		public function photodel()
		{
			$id  = empty($_POST['id'])?'':$_POST['id'];
			$res = PictureModel::delphoto($id);

			if ($res) {
				$data = ['errcode'=>1,'info'=>$res];
			} else {
				$data = ['errcode'=>0];
			}
			echo json_encode($data);
		}
		//结束轮播图播放
		public function picture_over()
		{
			$cid  = empty($_GET['cid'])?'':$_GET['cid'];
			$res = PictureModel::overphoto($cid);
			if ($res) {
				$this->success('轮播结束',url('admin/picture/picture_list'));
			} else {
				$this->error('结束失败',url('admin/picture/picture_list'));
			}
		}

	}
