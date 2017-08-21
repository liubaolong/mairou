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
		if(!empty($request->param('shop'))){
			$result = $this->shop->shopregister(input());
			if ($result) {

			} else {

			}
		}
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