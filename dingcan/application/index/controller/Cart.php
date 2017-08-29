<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
// use think\Session;
use app\index\model\Car as CarModel;
class Cart extends Controller
{
	protected $car;
	public function _initialize()
	{
		parent::_initialize();
		$this->car = new CarModel();
	}
	//购物车展示
	public function cart(Request $request)
	{
		//未登录用户不能进入该页面
		if (!session('?uid')) {
			$this->success('请先登录', 'auth/login');
		}
		$result = $this->car->showcar();
		if ($result) {
			$this->assign('result', $result);
		} else {
			$this->assign('result', '');
		}
		return $this->fetch();
	}
	//加入购物车
	public function addcar()
	{
		$data = [
			'car_uid' => session('uid'),
			'car_mid' => input('m_id')	
		];
		//加入购物车前先判断是否已有该商品记录
		$isres = $this->car->iscar($data);
		if ($isres) {
			$data = [
				'car_id' => $isres['car_id'],
				'mcounts' => input('mcounts')
			];
			$result = $this->car->updcar($data);
			if ($result) {
				return json($result);
			} else {
				return json(0);
			}
		} else {
			//第一次加入购物车
			$data['mcounts'] = input('mcounts');
			$data['car_addtime'] = time();
			$result = $this->car->addcar($data);
			if ($result) {
				return json($result);
			} else {
				return json(0);
			}
		}
	}
	//购物车商品数量改变
	public function nums()
	{
		$m_newprice = input('m_newprice');
		// dump(input());die;
		$data = [
			'car_uid' => input('car_uid'),
			'car_mid' => input('car_mid'),
			'mcounts' => input('mcounts'),
		];
		// dump($data);
		$result = $this->car->biancar($data);
		if ($result) {
			return json($m_newprice);
		} else {
			return json(0);
		}
		// return json(input());
		// $result = $this->car->nums();
	}
}