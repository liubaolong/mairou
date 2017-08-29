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
	//查询菜品所属商铺
	static public function store($data)
	{
		$result = Db::name('shop')->where('delete_time',null)->where('s_status',1)->where('s_qu',$data)->limit(3)->select();
		return $result;
	}
	//查询所有的店铺
	static public function alldish()
	{
		$result = Db::table('f_shop')->where('delete_time',null)->paginate(4);
		return $result;
	}
	//查询销量店铺
	static public function sale()
	{
		$result = Db::table('f_shop')->where('delete_time',null)->order('s_monthcount','desc')->paginate(4);
		return $result;
	}
	//查询注册时间
	static public function stime()
	{
		$result = Db::table('f_shop')->where('delete_time',null)->order('s_addtime','desc')->paginate(4);
		return $result;
	}
	//查询积分菜
	static public function credits()
	{
		$result  = Db::table('f_meal')
					->alias('m')
					->join('f_shop s','s.s_id = m.sid')
					->where('m.delete_time',null)
					->where('m.m_score','neq',0)
					->paginate(9);
					// dump($result);die;
		return $result;
	}
}