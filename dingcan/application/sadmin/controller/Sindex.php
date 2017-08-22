<?php
namespace app\sadmin\controller;
use app\sadmin\controller\Auth;
use app\sadmin\model\Sindex as SindexModel;
class Sindex extends Auth
{
	protected $is_login = ['*'];
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
		$arr = session('?sadmin') ? session('sadmin'): '';
		$this->assign('arr',$arr); 
		return $this->fetch();
	}
	//商家信息更改
	public function alertinfo()
	{
		dump($_FILES);
		dump($_POST);die;
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
