<?php
namespace app\sadmin\model;
use think\Model;
use think\Db;
class Order extends Model
{
		//订单管理
	static public function orderlist()
	{
		$result = Db::table('f_order')
					->alias('o')
					->join('f_meal m','o.o_mid = m.m_id')
					->join('f_user u','o.o_uid = u.uid')
					->join('f_address a','o.o_aid = a.a_id')
					->where('o.o_sid',session('sadmin')['s_id'])
					->where('o.delete_time',null)					
					->order('o.o_addtime','desc')
					->distinct(true)
					->field(['o.o_orderno','o.o_kuaidino','o.o_addtime','a.a_newaddress','a.a_user','o.allprice','u.username','a_phone'])
					->paginate(5);
		return $result;
	}
	//订单详情
	static public function ordermessage($data)
	{
		$result = Db::table('f_order')
					->alias('o')
					->join('f_meal m','o.o_mid = m.m_id')
					->where('o.o_orderno',$data)
					->paginate(5);
		return $result;			
	}
	//订单删除
	static public function delorder($data)
	{
		$arr = ['delete_time'=>time()];
		$result = Db::name('order')->where('o_orderno',$data)->update($arr);
		return $arr;
	}
	//订单回收站
	static public function recyleorder()
	{
		$result = Db::table('f_order')
					->alias('o')
					->join('f_meal m','o.o_mid = m.m_id')
					->join('f_user u','o.o_uid = u.uid')
					->join('f_address a','o.o_aid = a.a_id')
					->where('o.o_sid',session('sadmin')['s_id'])
					->where('o.delete_time','<>','')					
					->order('o.o_addtime','desc')
					->distinct(true)
					->field(['o.o_orderno','o.o_kuaidino','o.o_addtime','a.a_newaddress','a.a_user','o.allprice','u.username','a_phone'])
					->paginate(5);
		return $result;
	}
	//发货
	static public  function sendout($data)
	{
		$res = ['o_status'=>2,'o_kuaidino'=>$data['sid']];
		$result = Db::name('order')->where('o_orderno',$data['id'])->update($res);
		return $result;
	}
}