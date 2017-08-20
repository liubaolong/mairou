<?php
namespace app\index\controller;
use think\Controller;
class Cart extends Controller
{
	public function cart()
	{
		return $this->fetch();
	}
}