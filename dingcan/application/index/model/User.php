<?php
	namespace app\index\model;
	use think\Model;
	// use traits\model\SoftDelete;
	use think\Db;
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
		//退出登录，更新lasttime
		public function loginout($data)
		{
			$result = $this->where('uid',$data['uid'])->update(['lasttime'=>$data['lasttime']]);
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//查询用户的收货地址
		static public function useraddress()
		{
			$result = Db::name('address')->where('a_uid',session('uid'))->where('delete_time',null)->order('a_addtime','desc')->paginate(5);
			return $result;
		}
		//新增收货地址
		static public function newaddress($data)
		{
			$STR = [
					'a_uid'=>session('uid'),
					'a_user'=>$data['user'],
					'a_newaddress'=>$data['address'],
					'a_phone'=>$data['phone'],
					'a_addtime'=>time(),
					];
			$result = Db::name('address')->insert($STR);
			return $result;
		}
		//地址详情
		static public function adsdat($data)
		{
			$result = Db::name('address')->where('a_id',$data)->find();
			return $result;
		} 
		//删除地址
		static public function delress($data)
		{
			$arr = ['delete_time'=>time()];
			$result = Db::name('address')->where('a_id',$data)->update($arr);
			return $result;
		}
		//查询用户用户基本信息
		static public function useraccount()
		{
			$result = Db::name('user')->where('uid',session('uid'))->find();
			return $result;
		}
		//修改用户信息
		static public function useralert($data)
		{
			$arr = [
					'username'=>$data['user'],
					'email'=>$data['email'],
					'phone'=>$data['phone'],
					'sex'=>$data['sex'],
				];
			$result = Db::name('user')->where('uid',session('uid'))->update($arr);
			return $result;
		}
	}
	