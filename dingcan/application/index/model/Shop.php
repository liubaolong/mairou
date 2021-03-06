<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\MyCurl;
class Shop extends Model
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
	//查询一级板块
	static public function blok()
	{
		$result = Db::name('bk')->where('parentid',0)->select();
		return $result; 
	}
	//商家注册
	public function shopregister($data)
	{   
		$file = request()->file('photo');
		$info = $file->move(ROOT_PATH .	'public/static' .	DS	. 'upload'); 
		$path = "/static/upload\\". $info->getSaveName();
		$path = str_replace('\\','/',$path);
		$arr = [
				's_uid'=>session('uid'),
				's_name'=>$data['shop'],
				's_address'=>$data['address'],
				's_qu'=>$data['s_county'],
				's_phone'=>$data['phone'],
				's_time'=>$data['time'],
				's_wifi'=>$data['wifi'],
				's_info'=>$data['info'],
				's_ident'=>$data['ident'],
				's_pic'=>$path,
				's_addtime'=>time(),
				's_status'=>0,
				's_type'=>$data['type']
				];
		return Db::name('shop')->insert($arr); 

	}

	//店铺具体信息
	public function shops($data)
	{
		$result = $this->where('s_id', $data)->find();
		if ($result) {
			return $result;
		} else {
			return false;
		}
	}
	//路线查询
	static public function checkche($data)
	{
		$address = Db::name('shop')->where('s_id',$data['id'])->find();
		$appkey = '47c0d9ed09e20f8c';//你的appkey
		$start = $address['s_address'];//utf8
		$end = $data['che'];//utf8
		$city = '北京';//utf8
		$type = '';
		$url = "http://api.jisuapi.com/transit/station2s?appkey=$appkey&start=$start&end=$end&city=$city&type=$type";
		$result = MyCurl::curlOpen($url);
		$jsonarr = json_decode($result, true);
		//exit(var_dump($jsonarr));
		 
		if($jsonarr['status'] != 0)
		{
		    echo $jsonarr['msg'];
		    exit();
		}
		 
		$result = $jsonarr['result'][0];
		 
		//此处为公交换乘的参数
		$str = '';
		$str = $result['vehicles'][0].'<br>';

		foreach($result['steps'] as $val)
		{
		   $str .= $val['distance'].' '.$val['duration'].' '.$val['type'].' '.$val['steptext'].'<br>';
		}
		return $str;
	}
	//查询店铺
	static public function shopsearchp($data)
	{
		$result = Db::name('shop')->where('s_name','like',$data)->where('delete_time',null)->find();
		return $result;
	}

}
