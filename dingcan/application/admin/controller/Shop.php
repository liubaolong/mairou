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
		//申请商家展示
		public function shop_try()
		{	
			$data = 0;
			$result = $this->shop->shoplist($data);
			if ($result) {
				$this->assign('result', $result);
			} else {
				$this->assign('result', '');
			}
			return $this->fetch();
		}
		//商家管理展示
		public function shop_list()
		{
			$data = 1;
			$result = $this->shop->shoplist($data);
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
			
			if ($result) {
				$this->assign('result', $result);
			} else {
				$this->assign('result', '');
			}
			return $this->fetch();
		}
		//审核/拒绝 商家入住
		public function shenhe()
		{
			$data = input('s_id');
			// if (array_key_exists($data, $shopres[0][])) {
			if(input('status') == 1){
				$result = $this->shop->shenhe($data);
				if ($result) {
					$this->success('审核通过', 'shop/shop_list');
				} else {
					$this->error('审核失败', 'shop/shop_list');
				}
			} else {
				$data = [
					's_id' => input('s_id'),
				];
				$result = $this->shop->shenhe($data);
				if ($result) {
					$this->error('审核未通过', 'shop/shop_list');
				} else {
					$this->error('操作失败', 'shop/shop_list');
				}
			}
		}

	}