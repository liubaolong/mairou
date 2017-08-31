<?php
 	namespace app\index\model;
 	use think\Model;
 	use think\Db;
 	class Car extends Model{

 		//加入物品到购物车
 		public function addcar($data)
 		{
			//新增物品
 			$result = $this->insert($data);
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//已有物品叠加更新
 		public function updcar($data)
 		{
 			$result = $this->where('car_id', $data['car_id'])->setInc('mcounts',$data['mcounts']);
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//购物车数量的更新
 		public function biancar($data)
 		{
 			$result = $this->where('car_uid', $data['car_uid'])->where('car_mid', $data['car_mid'])->update(['mcounts'=>$data['mcounts']]);
 			// dump($result);die;
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//查询购物车已有该商品
 		public function iscar($data)
 		{
 			$result = $this->where($data)->find();
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//购物车展示
 		public function showcar()
 		{
 			$result = Db::name('User')
 					 ->alias('u')
 					 ->join('car c', 'u.uid=c.car_uid')
 					 ->join('meal m', 'c.car_mid=m.m_id')
 					 ->join('shop s', 'm.sid=s.s_id')
 					 ->where('car_uid', session('uid'))
 					 ->where('c.delete_time', null)
 					 ->where('m.delete_time', null)
 					 ->where('s.delete_time', null)
 					 ->select();
 			//展示前先判断店铺、菜品、该购物的东西是否被删除
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//确认订单查询
 		public function isorder($data)
 		{
 			$result = Db::name('Meal')
 					 ->alias('m')
 					 ->join('car c', 'c.car_mid=m.m_id')
 					 ->where('c.car_id', 'in', $data)
 					  ->select();
 			// dump($result);die;
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//删除购物车(单条删除)
 		public function delcar($data)
 		{
 			$result = $this
 					 // ->where('car_uid', $data['car_uid'])
 					 // ->where('car_mid', $data['car_mid'])
 					 ->where('car_id', 'in', $data)
 					 ->delete();
 			// dump($result);die;
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 		//删除购物车(多条删除)
 		public function delcares($data)
 		{
 			$result = $this
 					 ->where('car_uid', $data['car_uid'])
 					 ->where('car_mid', $data['car_mid'])
 					 ->delete();
 			if ($result) {
 				return $result;
 			} else {
 				return false;
 			}
 		}
 	}
