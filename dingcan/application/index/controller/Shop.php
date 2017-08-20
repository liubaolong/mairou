<?php
namespace app\index\controller;
use think\Controller;
class Shop extends Controller
{
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
	public function join()
	{
		return $this->fetch();
	}
}