<?php
namespace app\sadmin\model;
use think\Model;
use think\Db;
class Auth extends Model
{
	//检查商家登录
	static public function checklogin($data)
	{

		//查询用户
		$result = Db::name('user')->where('username',$data['userName'])->where('password', md5($data['password']))->find();
		//判断是否存在用户
		if ($result) {
			//查询是否有店铺
			$res = Db::name('shop')->where('s_uid',$result['uid'])->where('s_status',1)->find();
			if ($res) {
				session('sadmin',$res);
				return 1;
			} else {
				return 3;
			}
		} else {
			return 2;
		}
	}
	//商家退出登录
	static public function userloginout()
	{
		$data   =['lasttime'=>time()];
		Db::name('user')->where('uid',session('sadmin')['s_uid'])-> update($data);
	}
	//检查用户所拥有的商家
	static public function checkuser($data)
	{
		$result = Db::name('user')->where('username',$data['user'])->where('password', md5($data['pass']))->find();
		if ($result) {
			$res = Db::name('shop')->where('s_uid',$result['uid'])->where('s_status',1)->count();
			if ($res > 1) {
				$res = Db::name('shop')->where('s_uid',$result['uid'])->where('s_status',1)->select();
				return $res;
			} else{
				return false;
			}
		} else {
			return false;
		}
	}
	//指定商户登录
	static public function checkstore($data)
	{
		//查询是否有店铺
		$res = Db::name('shop')->where('s_name',$data['store'])->find();
		session('sadmin',$res);
		return $res;
	}
}