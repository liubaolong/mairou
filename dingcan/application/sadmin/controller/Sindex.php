<?php
namespace app\sadmin\controller;
use app\sadmin\controller\Auth;
use app\sadmin\model\Sindex as SindexModel;
use think\Request;
use think\Db;
use think\Paginator;
class Sindex extends Auth
{
	protected $is_login = ['*'];
	//商家后台
	public function Sindex()
	{
		return $this->fetch();
	}
		//商家信息
	public function info()
	{ 

		$arr = session('?sadmin') ? session('sadmin'): '';
		// dump($arr);die;
		$this->assign('arr',$arr); 
		return $this->fetch();
	}
	//商家信息更改
	public function alertinfo(Request $request)
	{
		if (empty($_FILES['file']['name'])) {
			$path = session('sadmin')['s_pic'];
		} else {
			$file = request()->file('file'); 
			$info = $file->move(ROOT_PATH .	'public/static' . DS . 'upload'); 
			$path = "/static/upload\\". $info->getSaveName();
			$path = str_replace('\\','/',$path);
		}
		$sinfo = input();
		$sinfo['s_pic'] = $path;
		$result = SindexModel::upinfo($sinfo);
		if ($result) {
			$this->success('修改成功',url('sadmin/sindex/info'));
		} else {
			$this->error('修改失败',url('sadmin/sindex/info'));
		}
	}
	//商家评价
	public function book()
	{
		$result = SindexModel::shopmate();
		$this->assign('res',$result);
		return $this->fetch();
	}
	//商家回复
	public function rece()
	{
		$this->assign('id',$_GET['id']);
		return $this->fetch();
	}
	//添加回复
	public function mesreply(Request $request)
	{
		$result = SindexModel::reply($_POST);
		if ($result) {
			$this->success('回复成功',url('sadmin/sindex/book'));
		} else {
			$this->error('回复失败',url('sadmin/sindex/book'));
		}
	}
	//轮播图申请
	public function flex()
	{
		return $this->fetch();
	}
	//轮播图提交
	public function slidphoto()
	{	
		$res = empty($_POST)?'':$_POST;
		$result = SindexModel::sdow($res);
		if ($result) {
			$this->success('申请成功',url('sadmin/sindex/flex'));
		} else {
			$this->error('申请失败',url('sadmin/sindex/flex'));
		}
	}
}
