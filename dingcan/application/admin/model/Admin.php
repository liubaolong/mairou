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
			'rb_password'=>md5($data['password']),
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
		$result[0] = Db::table('f_jues')->where('delete_time',null)->select();
		$result[1] = Db::table('f_rules')->select();
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
		$res    = Db::name('jues')->where('j_name',$info['role'])->find();
		$arr    = ['jr_rid'=>$info['power'],'jr_jid'=>$res['j_id']];
		$rule   = Db::name('jrules')->insert($arr); 
		return $result;
	}
	//角色详情
	static public function messagerole($id)
	{
		$result = Db::name('jues')
				->alias('j')
				->join('f_jrules r','j.j_id = r.jr_jid')
				->where('j.j_id',$id)
				->find();
		return $result;
	}
	//角色修改
	static public function editrole($info)
	{
		$data = [
			'j_name'=>$info['role'],
			'j_info'=>$info['info'],
			];
		$result = Db::name('jues')->where('j_id',$info['id'])->update($data);
		return $result;
	}
	//角色删除
	static public function roledel($id)
	{
		$data = ['delete_time'=>time()];
		$result = Db::name('jues')->where('j_id',$id)->update($data);
		return $result;
	}
	//权限查询
	static public function permissionadmin()
	{
		$result = Db::table('f_rules')->where('r_deletetime',null)->select();
		return $result;
	} 
	//权限添加
	static public function permissionadd($data)
	{
		$arr = [
			'r_name'=>$data['r_name'],
			'r_fields'=>$data['r_field'],
			'r_addtime'=>time(),
			];
		$result = Db::name('rules')->insert($arr);
		return $result;
	}
	//权限编辑
	static public function permissionmessage($id)
	{
		$result = Db::name('rules')->where('r_id',$id)->find();
		return $result;
	}
	//权限修改
	static public function permissioneidt($info)
	{
		$data = [
			'r_name'=>$info['r_name'],
			'r_fields'=>$info['r_field'],
			'r_addtime'=>time(),
			];
		$result = Db::name('rules')->where('r_id',$info['help'])->update($data);
		return $result;
	}
	//权限删除
	static public function permissiondel($id)
	{
		$data = ['r_deletetime'=>time()];
		$result = Db::name('rules')->where('r_id',$id)->update($data);
		return $result;
	}
}