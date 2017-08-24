<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\MyCurl;
class shop extends Model
{
	//查询店铺名
	public function shopname($data)
	{
		return Db::table('f_try')->where("t_name = '$data'")->select();
	}
	//查询身份证信息
	public function shopid($data)
	{
		$appkey = '47c0d9ed09e20f8c';//你的appkey
		$idcard = $data;
		$url = "http://api.jisuapi.com/idcard/query?appkey=$appkey&idcard=$idcard";
		$result = MyCurl::curlOpen($url);
		 
		$jsonarr = json_decode($result, true);
		//exit(var_dump($jsonarr));
		 
		if($jsonarr['status'] != 0)
		{
		    return $jsonarr['msg'];
		    exit();
		}

		$result = $jsonarr['result'];
		if(isset($result['sex'])){
			return $result['province'].' '.$result['city'].' '.$result['town'].' '.$result['sex'].' '.$result['birth'];
		} else {
			return $jsonarr['msg'];
		}
	}
	//查询电话号码归属地
	public function shopphone($data)
	{
		$appkey = '47c0d9ed09e20f8c';//你的appkey
		$shouji = $data;
		$url = "http://api.jisuapi.com/shouji/query?appkey=$appkey&shouji=$shouji";
		$result = MyCurl::curlOpen($url);
		 
		$jsonarr = json_decode($result, true);
		//exit(var_dump($jsonarr));
		 
		if($jsonarr['status'] != 0)
		{
		    return $jsonarr['msg'];
		    exit();
		}
		 
		$result = $jsonarr['result'];
		return  $result['province'].' '.$result['city'].' '.$result['company'].'<br>';
	}
	//商家注册
	public function shopregister($data)
	{   
		$file = request()->file('photo');
		$info = $file->move(ROOT_PATH .	'public/static' .	DS	. 'upload'); 
		$path = "__UPLOAD_PATH__\\". $info->getSaveName();
		$path = str_replace('\\','/',$path);
		dump($path);die;
		$arr = [
				't_uid'=>1,
				't_name'=>$data['shop'],
				't_address'=>$data['address'],
				't_qu'=>$data['s_county'],
				't_phone'=>$data['phone'],
				't_time'=>$data['time'],
				't_wifi'=>$data['wifi'],
				't_info'=>$data['info'],
				't_ident'=>$data['ident'],
				't_pic'=>$path,
				't_addtime'=>time(),
				't_status'=>0,
				];
		return Db::name('try')->insert($arr); 

	}
}
