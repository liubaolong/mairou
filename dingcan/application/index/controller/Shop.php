<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Shop as ShopModel;
use think\Request;
class Shop extends Controller
{
	protected $shop;
	public function  _initialize()
	{
		parent:: _initialize();
		$this->shop = new ShopModel;
	}
	//店铺
	public function Shop()
	{
		return $this->fetch();
	}
	//搜索店铺
	public function search_s()
	{
		return $this->fetch();
	}
	//商家入驻
	public function join(Request $request)
	{ 
		//未注册用户不能进入商家入驻页面
		if (!session('?uid')) {
			$this->success('请您先注册用户', 'auth/register');
		}
		if(!empty($request->param('shop'))){
			$result = $this->shop->shopregister(input());
			if ($result) {
				$this->success('待审核',url('index/index/index'));
			} else {
				$this->error('注册失败',url('index/index/join'));
			}
		}
		//查询一级板块
		$res =  ShopModel::blok();
		$this->assign('res',$res);
		return $this->fetch();
	}
	//判断商铺名是否重复
	public function checkname(){
		$name = $_POST['shop'];
		$result = $this->shop->shopname($name);
		if (empty($result)) {
			$data =['code'=> 1, 'result'=>$result];
		} else {
			$data =['code'=> 0, 'result'=>$result];
		}
		
		echo json_encode($data);
	}
	//判断身份证是否正确
	public function checkid()
	{
		$ident = $_POST['ident'];
		$result = $this->shop->shopid($ident);
		echo json_encode($result);
	}
	//判断手机号归属地
	public function checkphone()
	{
		$phone = $_POST['phone'];
		$result = $this->shop->shopphone($phone);
		echo json_encode($result);
	}
}