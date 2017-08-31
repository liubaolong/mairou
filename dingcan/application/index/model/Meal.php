<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Meal extends Model
{
	//查询单个菜详情
	static public function smeal($data)
	{
		$result['dish'] = Db::table('f_meal')
						->alias('m')
						->join('f_shop s','m.sid = s.s_id')
						->where(array('m.m_id'=>$data))
						->find();
		$result['count']= Db::table('f_pj')->where('p_mid',$data)->where('delete_time',null)->count();
		$result['app']  = Db::table('f_pj')
						->alias('p')
						->join('f_user u','p.p_uid = u.uid')
						->where('p_mid',$data)
						->where('p.delete_time',null)
						->select();
		return $result;
	}
	//查询该店铺所有菜品（包括特色菜）
	public function tese($data)
	{
		$result = $this->where('sid', $data)->paginate(4);
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
	//查询菜品
	static public function shopsearchd($data)
	{
		$result = Db::name('meal')->where('m_name','like',$data)->where('delete_time',null)->find();
		return $result;
	}

}