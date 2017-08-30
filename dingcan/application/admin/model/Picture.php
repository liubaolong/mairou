<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Picture extends Model
{
	//查询所有图片
	static public function plist()
	{
		$result = Db::table('f_ad')
					->alias('ad')
					->join('f_shop s','ad.ad_sid = s.s_id')
					->where('ad.delete_time',null)	
					->order('ad.ad_addtime','asc')				
					->select();
		return $result;
	}
	//展示图片的详情
	static public function pshow($data)
	{

		$result = Db::table('f_ad')
					->alias('ad')
					->join('f_shop s','ad.ad_sid = s.s_id')
					->where('ad.delete_time',null)	
					->where('ad.ad_id',$data)			
					->find();
		return $result;
	}
	//图片审核通过
	static public function papply($data)
	{
		$arr = ['status'=>1,'ad_overtime'=>$data['ptime'] * 180 * 24 + time()];
		$result = Db::name('ad')->where('ad_id',$data['id'])->update($arr);
		return $result;
	}
	//图片删除
	static public function delphoto($data)
	{
		$arr = ['delete_time'=>time()];
		$result = Db::name('ad')->where('ad_id',$data)->update($arr);
		return $result;
	}
	//结束轮播图播放
	static public function overphoto($data)
	{
		$arr = ['status'=>2];
		$result = Db::name('ad')->where('ad_id',$data)->update($arr);
		return $result;
	}
}