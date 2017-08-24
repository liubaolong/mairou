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
	//商家菜品分页
	static public function cailist()
	{
		$result = Db::name('meal')->where('sid',session('sadmin')['s_id'])->paginate(5);
		return $result;
	}
	//商家菜品增加
	static public function updishes($data)
	{
		$res = Db::name('meal')->where('sid',session('sadmin')['s_id'])->where('m_name',$data['title'])->select();
		if ($res) {
			return false;
		}
		$file  = request()->file('file'); 
		$info  = $file->move(ROOT_PATH .	'public/static' . DS . 'dishes'); 
		$path  = "__STATIC_PATH__\dishes\\". $info->getSaveName();
		$path  = str_replace('\\','/',$path);
		$data['m_pic'] = $path;
		$arr = [
				'sid'=>session('sadmin')['s_id'],
				'm_name'=>$data['title'],
				'm_newprice'=>$data['price'],
				'm_score'=>$data['s_score'],
				'm_info'=>$data['note'],
				'm_pic'=>$data['m_pic'],
				'm_addtime'=>time(),
				'm_specail'=>$data['special'],
				'm_counts'=>$data['count'],
			];
		$result = Db::name('meal')->insert($arr);
		if ($result) {
			return true;
		} else {
			return false;
		}
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
	//菜品上下架
	static public function put($data)
	{
		$str = Db::name('meal')->where('m_id',$data)->find();
		if ($str) {
			if ($str['m_isput']==1) {
				$arr = ['m_isput'=>0];
				$result = Db::name('meal')->where('m_id',$data)->update($arr);
				return 1;
			} else {
				$arr = ['m_isput'=>1];
				$result = Db::name('meal')->where('m_id',$data)->update($arr);
				return 2;
			}
		}
		return 3;
	}
	//菜品信息
	static public function mealinfo($data)
	{
		$result = Db::name('meal')->where('m_id',$data)->find();
		session('dished',$result);
		return $result;
	}
	//菜品信息修改
	static public function dcai($data)
	{
		if (session('dished')['m_newprice'] == $data['price']) {
			$oldprice = '';
		} else {
			$oldprice = session('dished')['m_newprice'];
		}
		$arr = [
				'm_name'=>$data['cai'],
				'm_oldprice'=>$oldprice,
				'm_newprice'=>$data['price'],
				'm_counts'=>$data['count'],
				'm_score'=>$data['s_score'],
				'm_specail'=>$data['special'],
				'm_info'=>$data['note'],
			];
		$result = Db::name('meal')->where('m_id',session('dished')['m_id'])->update($arr);
		if ($result) {
			 $newres = Db::name('meal')->where('m_id',session('dished')['m_id'])->find();
			 if ($newres) {
			 	session('dished' , $newres);
			 	return true;
			 }
		} else {
			return false;
		}
	}

}