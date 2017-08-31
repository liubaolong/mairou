<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\MyCurl;
class Collect extends Model
{

	//查看所有收藏店铺
	public function iscoll($data)
	{
		$result = $this
				  ->alias('c')
				  ->join('shop s', 'c.c_sid=s.s_id')
				  ->where('c.c_uid', $data)
				  ->select();
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}

	//取消收藏
	public function cancelcoll($data)
	{
		$result = $this
				  ->where('c_sid', $data['c_sid'])
				  ->where('c_uid', $data['c_uid'])
				  ->delete();
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
	//查看收藏店铺数量
	public function collnums($data)
	{
		$result = $this
				  ->where('c_uid', $data)
				  ->count();
		// dump($result);die;
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
	//添加收藏店铺
	public function addcoll($data)
	{
		$result = $this
				  ->insert($data);
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
	//是否收藏该店铺
	public function onecoll($data)
	{
		$result = $this
				  ->where('c_uid', $data['c_uid'])
				  ->where('c_sid', $data['c_sid'])
				  ->find();
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
}