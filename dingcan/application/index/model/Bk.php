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
		//一级分类
	    public function onefl()
	    {
	      $res1 = $this->where('parentid', 0)->select();
	      if ($res1) {
	      	return $res1;
	      } else {
	      	return false;
	      }
	    }
	    //二级分类
	    public function twofl($data)
	    {
	    	$res2 = $this->where('parentid',$data)->select();
	    	if ($res2) {
	    		return $res2;
	    	} else {
	    		return false;
	    	}
	    }
	    //三级分类
	    public function threefl()
	    {
	    	$res3 = $this->where('parentid',$data)->select();
	    	if ($res3) {
	    		return $res3;
	    	} else {
	    		return false;
	    	}
	    }
	    //四级分类
	    public function fourfl()
	    {
	    	$res4 = $this->where('parentid',$data)->select();
	    	if ($res4) {
	    		return $res4;
	    	} else {
	    		return false;
	    	}
	    }

 	}