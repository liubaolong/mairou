<?php
	namespace app\admin\model;
	use think\Model;
	use think\Db;
	use traits\model\SoftDelete;
	use app\admin\model\Bk as Bk;
	class Product extends Model{
		use SoftDelete;
		protected $deleteTime	= 'delete_time';
		//菜品分类查询展示
		public function showcai()
		{	
			$result = Db::name('bk')->where('delete_time','null')->order('concat(path, b_id)')->select();
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//菜品分类分页查询
		public function showpage()
		{	
			$result = Db::name('bk')->where('delete_time','null')->order('concat(path, b_id)')->paginate(5);
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//添加菜品分类
		public function addp($data)
		{
			//添加顶级
			if (!$data['b_id']) {
				$datas = [
					'b_name' => $data['bname'],
					'parentid' => 0,
					'path' => '0,'
				];
				$result = Db::name('bk')->insert($datas);
				// dump($result);die;
			//添加子级
			} else {
				//path路径，
				$path = Db::name('bk')->where('b_id',$data['b_id'])->find();
				// dump($path);die;
				$datas = [
					'b_name' => $data['bname'],
					'parentid' => $path['b_id'],
					'path' => $path['path'] . $path['b_id'] . ','
				];
				// dump($datas);die;
				$result = Db::name('bk')->insert($datas);
			}
			if ($result) {
				return $result;
			} else {
				return false;
			}
			
		}
		//具体类别查询
		public function lei($data)
		{
			$result = Db::name('bk')->where('b_id', $data)->find();
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//类别修改
		public function updlei($data)
		{
			$result = Db::name('bk')->where('b_id', $data['b_id'])->update(['b_name'=>$data['b_name']]);
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
		//删除分类
		public function dellei($data)
		{
			// $result = Db::name('bk')->where('b_id', $data)->delete();
			// $result = Db::name('bk')->where('b_id', $data)->destroy();
			$result = db('bk')->where('b_id', $data)->destroy();
			// $result = model('Bk')->where('b_id', $data)->destroy();
			// $result = $bk->where('b_id', $data)->destroy();
			// dump($result);
			if ($result) {
				return $result;
			} else {
				return false;
			}
		}
	}