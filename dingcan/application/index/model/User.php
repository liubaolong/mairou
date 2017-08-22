<?php
	namespace app\index\model;
	use think\Model;
	// use traits\model\SoftDelete;
	class User extends Model{
		// use SoftDelete;
		//用户是否存在
		public function isuser($data)
		{
			$result = $this->where('username',$data)->find();
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//该用户注册手机判断
		public function isphone($data)
		{
			// dump($data);die;
			$result = $this->where($data)->find();
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//注册新用户
		public function reg($data)
		{
			$result = $this->insert($data);
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//用户登录
		public function dologin($data)
		{
			$result = $this->where(['username'=> $data['username'],'password'=> $data['password'], 'allowlogin'=>0])->find();
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//修改密码
		public function gaipwd($data)
		{
			$result = $this->where('username',$data['username'])->update(['password'=>$data['password']]);
			// dump($data);die;
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
	}
	