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
 				return $result;
 			} else {
 				return false;
 			}
 		}
 	}