<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use think\MyCurl;
	use app\admin\model\Shop as ShopModel;
	class Shop extends Auth{
		protected $is_login = ['*'];
		protected $shop;
		public function _initialize()
		{
			parent::_initialize();
			$this->shop = new ShopModel();
		}
		//商家管理展示
		public function shop_list()
		{
			$result = $this->shop->shoplist();
			// dump($result);die;
			// dump($result);die;
			if ($result) {
				$this->assign('result', $result);
			} else {
				$this->assign('result', '');
			}
			return $this->fetch();
		}
		//商家详情
		public function shop_detail()
		{
			
			return $this->fetch();
		}
		
	}