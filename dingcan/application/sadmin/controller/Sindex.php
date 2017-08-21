<?php
namespace app\sadmin\controller;
use think\Controller;
class Sindex extends Controller
{
	//商家后台
	public function Sindex()
	{
		return $this->fetch();
	}
	//添加菜品
	public function add()
	{
		return $this->fetch();
	}
	//菜品管理
	public function list()
	{
		return $this->fetch();
	}
	//商家信息
	public function info()
	{
		return $this->fetch();
	}
	//商家评价
	public function book()
	{
		return $this->fetch();
	}
	//商家回复
	public function rece()
	{
		return $this->fetch();
	}
}
