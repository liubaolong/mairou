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
			$path = "__UPLOAD_PATH__\\". $info->getSaveName();
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
	// $data = ['zh_video.video_path','zh_video.video_img','zh_user.username','zh_video.looks','zh_video.create_time','zh_video.vid'];
	// 	$result = Db::table('zh_video')
	// 				->join('zh_user','zh_video.uid = zh_user.uid')
	// 				->field($data)
	// 				->where(array('zh_video.isdel'=>0,'zh_video.vid'=>$vid,'zh_user.isdel'=>0))
	// 				->select();

	//商家评价
	public function book()
	{
		$data = ['f_user.username','f_meal.m_name','f_pj.p_info'];
		$result = Db::table('f_pj')
					->join(['f_user'=>'f_pj.p_uid = f_user.uid','f_meal'=>'f_pj.p_mid = f_meal.m_id'])
					->field($data)
					->where(array('f_pj.sid'=>session('sadmin')['s_id'],'zh_user.isdel'=>0))
					->select();

		return $this->fetch();
	}
	//商家回复
	public function rece()
	{
		return $this->fetch();
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
		if($request->param('page')){
			$page = $request->param('page');  
			$list = SindexModel::cailist($page);

		} else {
			$list = SindexModel::cailist($page=1);
		}

		
		$this->assign('list',$list['result']);
		$this->assign('page',$list);
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
			$path = "__UPLOAD_PATH__\\". $info->getSaveName();
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
