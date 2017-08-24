<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use app\admin\model\Product as ProductModel;

	class Product extends Auth{
		protected $is_login = ['*'];
		protected $user;
		public function _initialize()
		{
			parent::_initialize();
			$this->user = new ProductModel();
		}
		//菜品管理
		public function product_brand()
		{
			return $this->fetch();
		}
		//菜品分类管理
		public function product_category()
		{
			//分类展示
			$result = $this->user->showcai();
			if ($result) {
				$xing['b_id'] = [];
				$this->assign('result', $result);
				foreach ($result as $k => $v) {
					$xing = str_repeat('★', substr_count($v['path'], ','));
					
					$this->assign('xing', $xing);
					dump($xing);
				}
				
				die;
				dump($xing);
			} else {
				$this->assign('result', '');
			}
			// dump($result);die;
			return $this->fetch();
		}
		//产品管理
		public function product_list()
		{
			return $this->fetch();
		}
		//添加菜品
		public function product_category_add()
		{
			
			return $this->fetch();
		}
		
		
	}