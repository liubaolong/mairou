<?php
namespace app\sadmin\controller;
use app\sadmin\controller\Auth;
use app\sadmin\model\Details as DetailsModel;
use think\Request;
use think\Db;
use think\Paginator;
class Details extends Auth
{
		//添加菜品
	public function add()
	{
		$res = DetailsModel::addcate();
		$this->assign('res',$res);
		return $this->fetch();
	}
	//二级板块添加
	public function checkcate()
	{
		$arr = empty($_POST['pid']) ? "" : $_POST['pid'];
		$res = DetailsModel::select($arr);
		if ($res) {
			$data = ['errcode'=>1,'info'=>$res];
		} else {
			$data = ['errcode'=>0];
		}
		echo json_encode($data);
	} 
	//三级板块添加
	public function checkaccess()
	{
		$arr = empty($_POST['pid']) ? "" : $_POST['pid'];
		$res = DetailsModel::access($arr);
		if ($res) {
			$data = ['errcode'=>1,'info'=>$res];
		} else {
			$data = ['errcode'=>0];
		}
		echo json_encode($data);
	}
	//添加菜品的基本信息
	public function adddish(Request $request)
	{	
		$sinfo = input();
		$result= DetailsModel::updishes($sinfo);
			if ($result) {
			$this->success('添加成功',url('sadmin/details/add'));
		} else {
			$this->error('添加失败',url('sadmin/details/add'));
		}
	}
	//菜品管理
	public function list(Request $request)
	{
		if (empty($_POST)) {
			$list = DetailsModel::cailist();
			$this->assign('list',$list);
		} else {
			$keyword = $_POST['keywords'];
			$list = DetailsModel::caiselect($keyword);
			$this->assign('list',$list);
		}
		return $this->fetch();
	}
	//菜品上下架
	public function amend(Request $request)
	{
		$id = $request->param('m_id');
		$result = DetailsModel::put($id);
		if ($result) {
			$data = [ 'error'=>1,'info'=> $result];
		} else {
			$data = ['error'=>0];
		}
		echo json_encode($data);
	}
	//菜品信息
	public function details(Request $request)
	{
		$res = DetailsModel::mealinfo($request->param('mid'));
		$this->assign('res',$res);
		return $this->fetch();
	}
	//菜品信息修改
	public function dinfo(Request $request)
	{
		if (empty($_FILES['file']['name'])) {
			$path = session('dished')['m_pic'];
		} else {
			$file = request()->file('file'); 
			$info = $file->move(ROOT_PATH .	'public/static' . DS . 'dishes'); 
			$path = "/static/upload\\". $info->getSaveName();
			$path = str_replace('\\','/',$path);
		}
		$sinfo = input();
		$sinfo['m_pic'] = $path;
		$result = DetailsModel::dcai($sinfo);
		if ($result) {
			$this->success('修改成功',url('sadmin/details/details',array('mid'=>session('dished')['m_id'])));
		} else {
			$this->error('修改失败',url('sadmin/details/details',array('mid'=>session('dished')['m_id'])));
		}
	}
}