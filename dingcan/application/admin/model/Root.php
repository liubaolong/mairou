<?php
	namespace app\admin\model;
	use think\Model;
	use think\Db;
	class Root extends Model{

		//后台登录
		public function dologin($data)
		{
			$result = $this->where($data)->where('rb_allow',0)->where('deletetime',null)->find();
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//退出登录
		public function loginout($data)
		{
			$result = $this->where('uid',$data['uid'])->update(['lasttime'=>$data['lasttime']]);
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
	}
