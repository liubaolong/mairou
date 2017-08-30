<?php
namespace app\sadmin\model;
use think\Model;
use think\Db;
class Sindex extends Model
{
	//商家信息修改
	static public function upinfo($data)
	{
		$arr = [
				's_uid'=>session('sadmin')['s_uid'],
				's_name'=>$data['stitle'],
				's_address'=>$data['sdescription'],
				's_qu'=>session('sadmin')['s_qu'],
				's_phone'=>$data['surl'],
				's_time'=>$data['time'],
				's_wifi'=>$data['wifi'],
				's_info'=>$data['info'],
				's_ident'=>$data['ident'],
				's_pic'=>$data['s_pic'],
				's_addtime'=>session('sadmin')['s_addtime'],
			];
		$result = Db::name('shop')->where('s_id',session('sadmin')['s_id'])->update($arr);
		if ($result) {
			 $newres = Db::name('shop')->where('s_id',session('sadmin')['s_id'])->find();
			 if ($newres) {
			 	session('sadmin' , $newres);
			 	return true;
			 }
		} else {
			return false;
		}
	}
	//商家评价
	static public function shopmate()
	{
		$result = Db::table('f_pj')
					->alias('p')
					->join('f_meal m','p.p_mid = m.m_id')
					->join('f_user u','p.p_uid = u.uid')
					->where(array('p.p_sid'=>session('sadmin')['s_id']))
					->paginate(5);
		return $result; 
	}
	//商家回复
	static public function reply($data)
	{
		$arr = [
			'ry_pid'=>$data['id'],
			'ry_info'=>$data['content'],
			'ry_addtime'=>time(),
			'ry_isdel'=>0,
			];
		$result = Db::name('reply')->insert($arr);
		return $result;
	}
	//商家轮播图申请
	static public function sdow($res)
	{
		$file  = request()->file('file'); 
		$info  = $file->move(ROOT_PATH .	'public/static' . DS . 'slider'); 
		$path = "/static/slider\\". $info->getSaveName();
		$path  = str_replace('\\','/',$path);
		$data = [
			'ad_sid'=>session('sadmin')['s_id'],
			'ad_name'=>$res['stitle'],
			'ad_url'=>$path,
			'ad_price'=>$res['time'] * 20,
			'ad_addtime'=>time(),
			];
		$result = Db::name('ad')->insert($data);
		return $result;
	}
}