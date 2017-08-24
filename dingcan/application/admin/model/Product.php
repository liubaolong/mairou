<?php
	namespace app\admin\model;
	use think\Model;
	use think\Db;
	class Product extends Model{

		//菜品分类展示
		public function showcai()
		{	
			$result = Db::name('bk')->select();
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}

	}