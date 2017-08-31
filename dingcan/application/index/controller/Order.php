<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\MyCurl;
use app\index\model\Car as CarModel;
use app\index\model\Address as AddressModel;
use app\index\model\Order as OrderModel;
class Order extends Controller
{
	protected $car;
	protected $address;
	protected $order;
	public function _initialize()
	{
		parent::_initialize();
		$this->car = new CarModel();
		$this->address = new AddressModel();
		$this->order = new OrderModel();
	}
	//我的订单-地址详情
	public function order()
	{
		$data = [
			'o_orderno' => input('o_orderno')
		];
		$result = $this->order->orderdetail($data);
		$this->assign('result',$result);
		//地址详情
		$adsres = $this->address->adstetail($data);
		$this->assign('adsres', $adsres);

		//订单状态信息查看
		// $ostatus = $this->ostatus(input('o_kuaidino'));
		$ostatus = $this->ostatus();
		
		$this->assign('ostatus',$ostatus['list']);
		$this->assign('issign',$ostatus['issign']);
		return $this->fetch();
	}
	//确认订单
	public function confirm()
	{
		//展示订单详情（接收提交过来的的订单）

		//该用户的收货地址
		$a_uid = session('uid');
		$ads = $this->address->shouhuo($a_uid);
		if ($ads) {
			$this->assign('ads', $ads);
		} else {
			$this->assign('ads', '');
		}
		//该用户购买的商品
		$data = implode(',', input()['chec']);
		$result = $this->car->isorder($data);
		if ($result) {
			$allprice = 0;
			//总价
			foreach ($result as $k => $v) {
				$allprice += ($v['m_newprice']*$v['mcounts']);
			}
			$this->assign('allprice', $allprice);
			//配送费
			if ($allprice > 100) {
				$this->assign('song', 0);
			} else {
				$this->assign('song', 10);
			}
			$this->assign('result', $result);
		} else {
			$this->assign('result', '');
		}
		//该用户的积分,兑换成相应的优惠券,100:1
		$u_score = floor(session('u_score')/100);
		$this->assign('u_score', $u_score); 

		return $this->fetch();
	}
	//订单状态
	public function respond()
	{
		return $this->fetch();
	}
	//我的订单表
	public function orderlist()
	{
		//未登录用户不能进入该页面
		if (!session('?uid')) {
			$this->success('请先登录', 'auth/login');
		}
		$data = [
			'o_uid' => session('uid')
		];
		$result =  $this->order->orderlist($data);
		$this->assign('result', $result);
		return $this->fetch();
	}
	//订单提交成功
	public function okorder()
	{
		//生成订单编号
		$o_orderno = time();
		
		$len = count(input()['o_sid']);
		$length = count(array_column(input(), 0));
		$field = [
			0 => 'o_sid',
			1 => 'o_mid',
			2 => 'o_counts',
			3 => 'oneprice',
			4 => 'manyprice'
		];
		//抽取订单中每个具体菜品信息
		$minfo = [];
		for ($i = 0; $i < $length; $i ++) {
			$minfo[] = array_column(input(), $i);
		}

		$res = [];
		for ($j = 0; $j < $len; $j++) {
			$res[] = array_combine($field, $minfo["$j"]);
		}

		//提交订单，插入操作
		foreach ($res as $k => $v) {
			$v['o_uid'] = session('uid');
			$v['o_aid'] = input('o_aid');
			$v['peiprice'] = input('peiprice');
			$v['peiprice'] = input('peiprice');
			$v['allprice'] = input('allprice');
			$v['o_orderno'] = $o_orderno;
			$v['o_message'] = input('o_message');
			$v['o_you'] = input('o_you');
			$v['o_addtime'] = $o_orderno;

			$result = $this->order->justorder($v);
		}
		$omid = input()['o_mid'];
		$ocounts = input()['o_counts'];
		// dump($omid);
		// dump($ocounts);die;
		if ($result) {
			
			//订单成功，购物车（循环）删除该记录
			
			$data = [];
			foreach ($omid as $key => $val) {
				$data = [
					'car_uid' => session('uid'),
					'car_mid' => $val
				];
				$delcar[$key] = $this->car->delcares($data);
			}
			if ($delcar) {
				$this->assign('o_orderno', $o_orderno);
				$this->assign('allprice', input('allprice'));
				
				// $this->assign('omid', input('omid'));
				// $this->assign('ocounts', input('ocounts'));
			} else {
				$this->error('操作失败', 'index/index/index');
			}
		} else {
			$this->error('操作失败', 'index/index/index');
		}
	
		return $this->fetch();
	}
	//订单收货地址
	public function orderadds()
	{

	}	

	//获取所选地址
	public function addss()
	{
		// dump(input('a_ids'));die;

		return json(input('a_ids')[0]);
	}
	//取消订单
	public function cancelorder()
	{
		// dump(input('o_orderno'));
		$data = [
			'o_orderno' => input('o_orderno')
		];
		$result = $this->order->delorder($data);
		// dump($result);die;
		if ($result) {
			return json(1);
		} else {
			return json(0);
		}
	}
	//支付时判断库存是否足够
	// public function is

	//支付成功，改变订单状态,生成快递号
	public function payorder()
	{
		//快递号
		// $data = []	

		$o_orderno = input('o_orderno');
		$result = $this->order->payorder($o_orderno);
		// dump($result);die;
		if ($result) {
			//支付成功时库存量相应的减少

			$this->success('支付成功','index/index/index');
		} else {
			$this->success('支付失败','index/index/index');
		}
	}

	//订单状态 接口
	public function ostatus()
	{
		$appkey = '00745bbd3dac4ef7';//你的appkey
		$url = "http://api.jisuapi.com/express/query?appkey=$appkey";
		//快递公司
		$type = 'ZTO';
		//订单编号
		$number = "449155040662";
		// $number =  $data;

		$post = array('type'=>$type, 
		            'number'=>$number
		        );

		$result = Mycurl::curlOpen($url, array('post'=>$post));

		$jsonarr = json_decode($result, true);

		if($jsonarr['status'] != 0)
		{
		    echo $jsonarr['msg'];
		    exit();
		}
		 
		$result = $jsonarr['result'];
		
		return $result;
	}
}