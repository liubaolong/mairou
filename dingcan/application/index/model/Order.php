<?php
 	namespace app\index\model;
 	use think\Model;
 	use think\Db;

 	class Order extends Model{
 		
 		//提交订单
 		public function justorder($data)
 		{
 			$result = $this->insert($data);
 			if ($result) {
 				//订单提交成功，要删除该购物车
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//查询订单列表
 		public function orderlist($data)
 		{
 			$result = Db::name('meal')
 					  
 					  ->alias('m')
 					  ->join('order o', 'm.m_id=o.o_mid')
 					  ->join('address a','o.o_aid = a.a_id')
 					  ->where('o_uid', $data['o_uid'])
 					  ->where('o.delete_time',null)					
					  ->order('o.o_addtime','desc')
					  ->distinct('true')
 					  ->field(['o.o_orderno','o.o_kuaidino','o.o_addtime','a.a_user','o.allprice','a_phone', 'o.o_status'])
					  ->paginate(5);
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//查询订单详情
 		public function orderdetail($data)
 		{
 			$result = $this->where('o_orderno', $data['o_orderno'])->select();
 			$result = Db::name('meal')
 					  ->distinct('true')
 					  ->alias('m')
 					  ->join('order o', 'm.m_id=o.o_mid')
 					  ->join('f_address a','o.o_aid = a.a_id')
 					  ->where('o_orderno', $data['o_orderno'])
 					  ->where('o.delete_time',null)					
					  ->order('o.o_addtime','desc')
					  ->paginate(5);

 			if ($result) {
 				return $result;
 			} else {	
 				return false;
 			}
 		}
 		//取消订单
 		public function delorder($data)
 		{
 			$result = $this->where('o_orderno', $data['o_orderno'])->delete();
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//支付订单
 		public function payorder($data)
 		{
 			$result = $this->where('o_orderno', $data)->update(['o_status' => 1]);
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}

 	}