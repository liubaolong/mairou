<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Member extends Model
{
	//查询所有用户
	static public function user()
	{
		$result = Db::name('user')->select();
		return $result;
	} 
	//禁用用户//启用用户
	static public function disable($data)
	{
		$res    = Db::name('user')->where('uid',$data)->find();
		if ($res['allowlogin']==1){
			$result = Db::name('user')->where('uid',$data)->update(['allowlogin'=>0]);
			return '已启用';
		} else {
			$result = Db::name('user')->where('uid',$data)->update(['allowlogin'=>1]);
			return '已停用';
		}
		
	}
}