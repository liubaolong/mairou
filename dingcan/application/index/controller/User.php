<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User as UserModel;
class User extends Controller
{
	//用户中心
	public function user()
	{
		//未登录用户不能进入该页面
		if (!session('?uid')) {
			$this->success('请先登录', 'auth/login');
		}
		return $this->fetch();
	}
	//我的收藏
	public function favorites()
	{
		//未登录用户不能进入该页面
		if (!session('?uid')) {
			$this->success('请先登录', 'auth/login');
		}
		return $this->fetch();
	}
	//我的地址
	public function address()
	{
		$result = UserModel::useraddress();
		$this->assign('res',$result);
		return $this->fetch();
	}
	//添加地址
	public function newadd()
	{	
		$arr = empty($_POST['user'])?'':$_POST;
		$result = UserModel::newaddress($arr);
		if ($result) {
			$data = ['errcode'=>1,'info'=>$result];
		} else {
			$data = ['errcode'=>0];
		}
		echo json_encode($data);
	}
	//地址详情
	public function addresdat()
	{
		$id = empty($_POST['id'])?'':$_POST['id'];
		$result = UserModel::adsdat($id);
		if ($result) {
			$data = ['errcode'=>1,'info'=>$result];
		} else {
			$data = ['errcode'=>0];
		}
		echo json_encode($data);
	}
	//删除地址
	public function deladdress()
	{
		$id = empty($_POST['id'])?'':$_POST['id'];
		$result = UserModel::delress($id);
		if ($result) {
			$data = ['errcode'=>1,'info'=>$result];
		} else {
			$data = ['errcode'=>0];
		}
		echo json_encode($data);
	}
	//账户管理
	public function account()
	{
		$result = UserModel::useraccount();
		$this->assign('result',$result);
		return $this->fetch();
	}
	//用户信息修改
	public function alertuser()
	{
		$info = empty($_POST)?'':$_POST;
		$result =  UserModel::useralert($info);
		if ($result) {
			$this->success('修改成功',url('index/user/account'));
		} else {
			$this->error('修改失败',url('index/user/account'));
		}
	}
	//优惠劵
	public function coupon()
	{
		return $this->fetch();
	}
}