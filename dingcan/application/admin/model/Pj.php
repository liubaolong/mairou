<?php
	namespace app\admin\model;
	use think\Model;
	use think\Db;
	class Pj extends Model
	{
		public function pjlist()
		{
			// $result = $this->all();
			$result = Db::name('user')
					  ->alias('u')
					  ->join('pj p', 'u.uid = p.p_uid')
					  ->where('p.delete_time', null)
					  ->select();
			// dump($result);die;
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
	}
