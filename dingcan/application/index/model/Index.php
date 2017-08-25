<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Index extends Model
{
	//查询热门菜品
	static public function hotdish()
	{
		$result = Db::name('meal')->where('m_isput',0)->order('m_mothcounts','desc')->limit(3)->select();
		return $result;
	} 
	static public function store($data)
	{
		$result = Db::name('shop')->where('delete_time',null)->where('s_status',1)->where('s_qu',$data)->limit(3)->select();
		return $result;
	}
}