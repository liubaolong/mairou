<?php
namespace app\index\controller;
use think\Controller;
class Tpublic extends Controller
{
	public function jump($data,$url)
	{
		$this->assgin('content',$data);
		$this->assgin('url',$url);
		return $this->fetch();
	}
}