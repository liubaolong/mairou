<?php
	namespace app\index\controller;
	use think\Controller;
	use app\index\model\Meal as MealModel;
	use think\MyCurl;
	use think\Request;
	class Meal extends Controller{

		//菜品详情
		public function detailsp(Request $Request)
		{
			$mid = empty($_GET['id']) ? $Request->param('id'):$_GET['id'];
			//查找菜的信息 评价 
			$res = MealModel::smeal($mid);	
			$this->assign('dish',$res);
			return $this->fetch();
		}
		//菜谱查询
		public function dmessage()
		{
			//菜谱API查找菜简介
			$appkey = '47c0d9ed09e20f8c';
				$num = 1;
				$keyword = $res['dish']['m_name'];
				$url = "http://api.jisuapi.com/recipe/search?appkey=$appkey&keyword=$keyword&num=$num";
				$result = MyCurl::curlOpen($url);
				$jsonarr = json_decode($result, true);

				 
				if($jsonarr['status'] != 0)
				{
				    echo $jsonarr['msg'];
				    exit();
				}
				$result = $jsonarr['result'];
				foreach($result['list'] as $val)
				{
				    $dmes = $val['content'];
				}
				$this->assign('dmes',$dmes);
		}
		//搜索菜品
		public function search_p()
		{
			return $this->fetch();
		}
	//查询菜
	public function seachd()
	{
		$name = $_POST['keyword'];
		$res  = MealModel::shopsearchd($name);
		dump($res['m_id']);
		if ($res) {
			$this->redirect('index/meal/detailsp',['id'=>$res['m_id']]);
		}
	}
}
