<?php
 	namespace app\index\model;
 	use think\Model;
 	use think\Db;
 	class Address extends Model{

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
 		
 	}