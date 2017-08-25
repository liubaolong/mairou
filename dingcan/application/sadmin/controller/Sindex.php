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
		$result = Db::table('f_pj')
					->alias('p')
					->join('f_meal m','p.p_mid = m.m_id')
					->join('f_user u','p.p_uid = u.uid')
					->where(array('p.p_sid'=>session('sadmin')['s_id']))
					->paginate(5);
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
	//添加菜品
	public function add()
	{
		return $this->fetch();
	}
	//添加菜品的基本信息
	public function adddish(Request $request)
	{	
		$sinfo = input();
		$result= SindexModel::updishes($sinfo);
			if ($result) {
			$this->success('添加成功',url('sadmin/sindex/add'));
		} else {
			$this->error('添加失败',url('sadmin/sindex/add'));
		}
	}
	//菜品管理
	public function list(Request $request)
	{
		$list = SindexModel::cailist();
		$this->assign('list',$list);
		return $this->fetch();
	}
	//菜品上下架
	public function amend(Request $request)
	{
		$id = $request->param('m_id');
		$result = SindexModel::put($id);
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
		$res = SindexModel::mealinfo($request->param('mid'));
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
		$result = SindexModel::dcai($sinfo);
		if ($result) {
			$this->success('修改成功',url('sadmin/sindex/details',array('mid'=>session('dished')['m_id'])));
		} else {
			$this->error('修改失败',url('sadmin/sindex/details',array('mid'=>session('dished')['m_id'])));
		}
	}
}
