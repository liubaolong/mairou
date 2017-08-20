<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
	//首页
    public function index()
    {
        return $this->fetch();
    }
    //订餐
    public function list()
    {
    	return $this->fetch();
    }
   	//积分商城
   	public function category()
   	{
   		return $this->fetch();
   	}
   	//关于我们
   	public function article_read()
   	{
   		return $this->fetch();
   	}
}
