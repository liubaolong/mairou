<?php
namespace app\sadmin\model;
use think\Model;
use think\Db;
class Auth extends Model
{
	static public function checklogin($data)
	{
		//查询用户
		$result = Db::name('user')->where('username',$data['userName'])->where('password', md5($data['password']))->find();
		//判断是否存在用户
		if ($result) {
			//查询是否有店铺
			$res = Db::name('shop')->where('s_uid',$result['uid'])->find();
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
}