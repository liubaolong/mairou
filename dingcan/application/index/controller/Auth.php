<?php
namespace app\index\controller;
use app\index\model\User as UserModel;

use think\Controller;
use think\Ucpaas;
use think\Request;
use think\Session;
use think\Validate;
class Auth extends Controller
{
	protected $user;
	public function _initialize()
	{
		
		parent::_initialize();
		$this->user = new UserModel();
	}
	//登录
	public function login(Request $request)
	{
		return $this->fetch();
	}
	//do登录
	public function dologin(Request $request)
	{
		$uname = trim(input('uname'));
		$pwd = md5(trim(input('pwd')));
		$data =[
			'username'=>$uname,
			'password'=>$pwd,
		];
		$result = $this->user->dologin($data);
		if ($result) {
			session('uid', $result['uid']);
			session('uname', $result['username']);
			session('u_level', $result['u_level']);
			session('u_score', $result['u_score']);
			//退出时保存
			session('lasttime', time());
			return $this->success('登录成功', url('index/index/index'));
		} else {
			return $this->error('登录失败', url('index/auth/login'));
		}
	}
	//注册
	public function register()
	{
		return $this->fetch();
	}
	//注册新用户
	public function reg(Request $request)
	{
		// dump($_SERVER['HTTP_REFERER']);
		// dump($request->ip());die;//获取ip地址
		// dump($request->domain());//域名
		// dump($request->param('pyzm'));
		// dump(date('Y-m-d H:i:s',$regtime));
		$rip = ip2long($request->ip());
		$data = [
			'username' => trim(input('uname')),
			'password' => md5(trim(input('pwd'))),
			'email'    => input('uemail'),
			'phone'    => input('phone'),
			'regtime'  => time(),
			'u_regip'  => $rip
		];
	   $result = $this->user->reg($data);
	   if ($result) {
	   	return $this->success('注册成功', url('index/index/index'));
	   } else {
	   	return $this->success('注册失败');
	   }
	}
	//用户是否存在
	public function isuser()
	{
		$uname = input('uname');
		$result = $this->user->isuser($uname);
		if ($result) {
			return json(['errorcode'=>1, 'info'=>'该用户已存在']);
		} else  {
			return json(['errorcode'=>0, 'info'=>'恭喜，可以注册该用户名']);
		}
	}
	
	//手机验证码
	public function sendPhoneCode(){
		//初始化必填
        $options['accountsid']='8b33c1c3cf1352820d28559219ab3369';
        $options['token']='e756610e9138c95d258ccf0aec55bd91';

        $str = '12345678900987654321';
        $str1 = substr(str_shuffle($str),0,4);

        //初始化 $options必填
        $ucpass = new Ucpaas($options);
 
        //开发者账号信息查询默认为json或xml

        $ucpass->getDevinfo('json');
      
        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "d124f9e0d4954002a55d31137bb20f18";
        $to = input('phone');
        $templateId = "107045";
        $param=$str1;
		//存起来和输入进行比较验证
		session('dx', $str1);
		// $ucpass->templateSMS($appId,$to,$templateId,$param);
        echo json_encode($str1);
	}

	//手机验证码是否正确
	public function pyzm()
	{
		$dxyzm = input('dxyzm');
		dump($dxyzm);die;
		$dx = session('?dx') ? session('dx') : '';
		if ($dxyzm != $dx) {
			return json(['errorcode'=>0, 'info'=>'短信验证码输入错误']);
		} else  {
			return json(['errorcode'=>1, 'info'=>'短信验证码输入正确']);
		}
	}
	//验证码是否正确
	public function yzm()
	{
		$captcha=input("yzm");
		if (empty($captcha)) {
			return json(['code'=>0,'data'=>'','msg'=>'验证码不能为空!']);
		}
		if (!captcha_check($captcha)) {
			return json(['code'=>-1,'data'=>'','msg'=>'验证码错误!']);
		} else {
			return json(['code'=>1,'data'=>url('index/index'),'msg'=>'验证成功!']);
		}
	}
	//是否是用户注册时的手机号
	public function isphone()
	{
		$data = [
			'username' => trim(input('uname')),
			'phone' => trim(input('phone')),
		];
		$result = $this->user->isphone($data);
		if ($result) {
			return json(['errorcode'=>1, 'info'=>'该用户手机存在']);
		} else  {
			return json(['errorcode'=>0, 'info'=>'该注册的用户手机不存在']);
		}
	}
	//找回/修改密码展示
	public function lookfor()
	{
		return $this->fetch();
	}
	//修改密码
	public function gaipwd()
	{
		// dump(input());
		$data = [
			'username' => trim(input('uname')),
			'password' => md5(trim(input('repwd')))
		];
		$result = $this->user->gaipwd($data);
		if ($result) {
			return $this->success('修改成功',url('index/index/index'));
		} else {
			return $this->success('修改失败');
		}
	}
}