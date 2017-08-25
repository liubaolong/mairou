<?php
namespace app\sadmin\controller;
use app\sadmin\controller\Auth;
use app\sadmin\controller\Sindex as Sindex;
class index extends Auth
{
	protected $is_login = ['*'];
	public function index()
	{
		// dump(11);die;
		$this->assign('title', 'wo');
		return $this->fetch('sadmin@auth/login');
	}
}