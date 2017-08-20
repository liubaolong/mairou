<?php
namespace app\index\controller;
use think\Controller;
class Message extends Controller
{
	//我的留言
	public function message()
	{
		return $this->fetch();
	}
}