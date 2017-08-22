<?php
namespace app\index\controller;
use think\Controller;
use think\Ucpaas;
use think\Request;
use think\Session;
class Auth extends Controller
{
	//初始化
	public function _initialize()
	{
		
		parent::_initialize();
	}
	//登录
	public function login()
	{
		return $this->fetch();
	}
	//注册
	public function register()
	{
		return $this->fetch();
	}
	//验证
	public function yzm(Request $request)
	{
		//初始化必填
			$options['accountsid']='7ad45ccec3ac100be0869f943f07881b';
			$options['token']='ec2a65d86f4c57f64c1c624346987cc7';

			$str = '12345678900987654321';
			$str1 = substr(str_shuffle($str),0,4); 
			Session::set('yzm',$str1,'think');
			//初始化 $options必填
			$ucpass = new Ucpaas($options);
			//开发者账号信息查询默认为json或xml

			// echo $ucpass->getDevinfo('json');
			$appId = "a07425fe5d0d4eb097c7fe79b397255e";
			dump($_GET);
			$to = $_GET['phone'];
			$templateId = "104112";
			$param=$str1;
			// echo $ucpass->templateSMS($appId,$to,$templateId,$param);
	}
}