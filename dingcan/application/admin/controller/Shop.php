<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use think\MyCurl;
	use think\Request;
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
			 // dump($result[0]['s_id']);die;
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
			// dump(input());die;//数组sid
			//先判断不能非法输入
			// if ( input('sid')) {

			// }
			$data = [
				's_id' => input('sid')
			];
			$result = $this->shop->details($data);
			// dump($result['s_id']);die;
			// dump($result[0]['s_id']);die;
			// dump(11);
			// dump($result);
			if ($result) {
				$this->assign('result', $result);
			} else {
				$this->assign('result', '');
			}
			return $this->fetch();
		}
		
	}