<?php
	namespace app\admin\model;
	use think\Model;

	class Shop extends Model
	{

		//商家列表查询
		public function shoplist($data)
		{
			// dump($data	);die;
			if (!$data) {
				$result = $this->where('s_status', 'in' , '0,2')->select();
			} else {
				$result = $this->where('s_status', '1')->select();
			}
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
			if ($result) {
				return $result;
			} else {
				return false;
			}
		} 
		//更改审核状态
		public function shenhe($data)
		{
			if (!is_array($data)) {
				$result = $this->where('s_id',$data)->update(['s_status'=>1]);
			} else {
				$result = $this->where('s_id',$data['s_id'])->update(['s_status'=>2]);	
			}
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}

		//商家删除
		public function shopdel($data)
		{
			if (!is_array($data)) {
				$result = $this->where('s_id',$data)->update(['s_status'=>1]);
			} else {
				$result = $this->where('s_id',$data['s_id'])->update(['s_status'=>2]);	
			}
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
	}