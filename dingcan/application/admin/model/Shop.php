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
		//商家详情
		public function details($data)
		{
			$result = $this->where($data)->find();
			// dump($result);die;
			if ($result) {
				return $result;
			} else {
				return false;
			}
		} 
	}