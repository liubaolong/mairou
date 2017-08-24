<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use app\admin\model\Product as ProductModel;
	use think\Request;
	class Product extends Auth{
		protected $is_login = ['*'];
		protected $product;
		public function _initialize()
		{
			parent::_initialize();
			$this->product = new ProductModel();
		}

		//菜品分类展示
		public function product_category()
		{
			//分类展示
			$result = $this->product->showcai();
			if ($result) {
				$xing = [];
				$this->assign('result', $result);
				foreach ($result as $k => $v) {
					$xing[]['b_id'] = str_repeat('&nbsp;&nbsp;&nbsp; ★|--&nbsp;&nbsp;&nbsp; ', substr_count($v['path'], ','));
				}
				$this->assign('xing', $xing);
			} else {
				$this->assign('result', '');
			}
			return $this->fetch();
		}
		//分类分页管理
		public function product_list()
		{
			$list = $this->product->showpage();
			// dump($result);die;
			if ($list) {
				// $page = $list->render();
				$this->assign('list', $list);
			} else {
				$this->assign('list', '');
			}
			return $this->fetch();
		}
		//添加分类
		public function product_add()
		{
			$data = [
				'b_id' => input('sel'),
				'bname' => input('bname')
			];
			
				$result = $this->product->addp($data);
			if ($result) {
				$this->success('添加分类成功');
			} else {
				$this->error('添加分类成功');
			}
		}
		//展示当前分类
		public function product_man()
		{
			$data = input('id');
			$result = $this->product->lei($data);
			if ($result) {
				$this->assign('result', $result);
			} else {
				$this->assign('result', '');
			}
			return $this->fetch();
		}
		//修改分类
		public function updlei()
		{
			$data = [
				'b_id' => input('b_id'),
				'b_name' => input('b_name')
			];
			$result = $this->product->updlei($data);

			if ($result) {
				$this->success('修改成功', 'product/product_list');
			} else {
				$this->error('修改失败');
			}
		}
		//删除分类
		public function dellei()
		{
			// return json(0);
			// return json(input('b_id'));
			$data = input('b_id');
			$result = $this->product->dellei($data);
			if ($result) {
				return json(1);
			} else {
				return json(0);
			}
		}
	}