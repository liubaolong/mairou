<?php
 	namespace app\index\model;
 	use think\Model;
 	use think\Db;
 	class Address extends Model{

 		//订单时选择地址
 		public function shouhuo($data)
 		{
			$result = $this->where('a_uid', $data)->select();
	 			// dump($result);die;
			if ($result) {
				return $result;
			} else {
				return false;
			}
 		}

 		//产看订单详情时地址
 		public function adstetail($data)
 		{
 			$adsres =  Db::name('address')
 					   ->alias('a')
 					   ->join('order o', 'a.a_id=o.o_aid')
 					   ->where('o_orderno', $data['o_orderno'])
 					   ->find();
 			// dump($adsres);die;
 			if ($adsres) {
				return $adsres;
			} else {
				return false;
			}
 		}
 		
 	}