<?php
 	namespace app\index\model;
 	use think\Model;
 	use think\Db;

 	class Bk extends Model{
 		
 		//查询分类列表
 		public function chabk()
		{	
			$result = Db::name('bk')->where('delete_time','null')->order('concat(path, b_id)')->select();
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
 	}