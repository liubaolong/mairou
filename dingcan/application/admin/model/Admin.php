<?php
namespace app\admin\model;
use think\Model;
use think\Db;
class Admin extends Model
{
	//查询用户名及角色
	static public function listadmin()
	{
		$result = Db::table('f_ujuese')
				->alias('u')
				->join('f_jues j','u.uj_jid = j.j_id')
				->join('f_root r','u.uj_uid = r.rb_id')
				->where('r.deletetime',null)				
				->select();
		return $result;
	}
	//查询所编辑用户的详情
	static public function editadmin($data)
	{	
		$result = Db::table('f_ujuese')
				->alias('u')
				->join('f_jues j','u.uj_jid = j.j_id')
				->join('f_root r','u.uj_uid = r.rb_id')
				->where('r.deletetime',null)
				->where('r.rb_id',$data)		
				->find();
		$role = Db::name('jues')->where('delete_time',null)->select();
		$result['role'] = $role; 
		return $result;
	}
	//修改用户的详情
	static public function adminalert($data,$id)
	{
		$arr = [
			'rb_username'=>$data['adminName'],
			'rb_password'=>$data['password'],
			'rb_sex'=>$data['sex'],
			'rb_phone'=>$data['phone'],
			'rb_info'=>$data['info'],
			];
		$result = Db::name('root')->where('rb_id',$id)->update($arr);
		$str = ['uj_jid'=>$data['adminRole']];
		$res = DB::name('ujuese')->where('uj_uid',$id)->update($str);
		if($result||$str){
			return true;
		} else{
			return false;
		}
	}
	//添加管理员
	static public function addadmin()
	{
		$role = Db::name('jues')->where('delete_time',null)->select();
		return $role;
	}
	//查询管理员是否重复
	static public function checkupname($data)
	{
		$result = Db::name('root')->where('rb_username',$data)->where('deletetime',null)->find();
		return $result;
	}
	//添加管理员信息
	static public function messageadd($data)
	{
		$arr = [
			'rb_username'=>$data['adminName'],
			'rb_password'=>md5($data['password']),
			'rb_sex'=>$data['sex'],
			'rb_phone'=>$data['phone'],
			'rb_info'=>$data['info'],
			'rb_addtime'=>time(),
			];
		$result = Db::name('root')->insert($arr);
		$res = Db::name('root')->where('rb_username',$data['adminName'])->find();
		$str =  ['uj_uid'=>$res['rb_id'],'uj_jid'=>$data['adminRole']];
		$role = Db::name('ujuese')->insert($str);
		if ($result&&$role) {
			return true;
		} else {
			return false;
		}
	}
	//管理员禁用
	static public function stopadmin($data)
	{
		$id = Db::name('root')->where('rb_id',$data)->find();
		if ($id['rb_allow'] == 0)	{
			$arr    = ['rb_allow'=>1];
			$result = Db::name('root')->where('rb_id',$data)->update($arr);
			return '已停用';
		} else {
			$arr    = ['rb_allow'=>0];
			$result = Db::name('root')->where('rb_id',$data)->update($arr);
			return '已启用';
		}
	}
	//管理员删除
	static public function deladmin($id)
	{
		$data = ['deletetime'=>time()];
		$res = Db::name('root')->where('rb_id',$id)->update($data);
		return $res;
	}
	//角色查询
	static public function roleadmin()
	{
		$result = Db::table('f_jues')->where('delete_time',null)->select();
		return $result;
	}
	//角色添加
	static public function addrole($info)
	{
		$data = [
			'j_name'=>$info['role'],
			'j_info'=>$info['info'],
			'j_addtime'=>time(),
			];
		$result = Db::name('jues')->insert($data);
		return $result;
	}
}