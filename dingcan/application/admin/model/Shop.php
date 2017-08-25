<?php
	namespace app\admin\model;
	use think\Model;

	class Shop extends Model
	{

		//商家列表查询
		public function shoplist()
		{
			$result = $this->all();
			// dump($result);die;
			if ($result) {
				return $result;
			} else {
				return false;
			}
		} 
	}