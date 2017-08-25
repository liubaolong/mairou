<?php
namespace app\index\controller;
use think\Controller;
use think\MyCurl;
use app\index\model\Index as IndexModel;
use think\Request;
class Index extends Controller
{
	//首页
    public function index(Request $request)
    {  
        
        $stor = '东城区';
        $res  = IndexModel::store($stor);
        //查询热门菜
        $dish = IndexModel::hotdish();
        // //新闻标题
        // $donews = $this->donews();
        // $this->assign('donews', $donews);
        $this->assign('dish', $dish);
        $this->assign('str',$res);
        return $this->fetch();
    }   
    //按区搜素店铺
    public function areastore()
    {   
        $stor = $_POST['stor'];
        $res  = IndexModel::store($stor);
        if ($res) {
            $data = ['errcode'=>1,'info'=>$res];
        } else {
            $data = ['errcode'=>0];
        }
        echo json_encode($data);
    }
    //新闻内容展示
    // public function news(Request $request)
    // {

    //   $showNews = $this->donews();
    //   $nid = $_GET['id'] - 1;
    //   if (array_key_exists($nid, $showNews)) {
    //     $this->assign('showNews', $showNews[$nid]);
    //   } else {
    //     $this->error('非法操作', 'index/index/index');
    //   }
    //   return $this->fetch();
    // }
    //获取新闻
    // public function donews()
    // {
    //   // http://api.jisuapi.com/news/get?channel=头条&start=0&num=10&appkey=yourappkey
    //   $num = 3;
    //   $appkey = '00745bbd3dac4ef7';//你的appkey
    //   $channel='头条';//utf8 新闻频道(头条,财经,体育,娱乐,军事,教育,科技,NBA,股票,星座,女性,健康,育儿)
    //   $url = "http://api.jisuapi.com/news/get?channel=$channel&start=0&num=$num&appkey=$appkey";
    //   $result = Mycurl::curlOpen($url);
    //   $jsonarr = json_decode($result, true);
    //   if($jsonarr['status'] != 0)
    //   {
    //       echo $jsonarr['msg'];
    //       exit();
    //   }
    //   $result = $jsonarr['result'];
    //   return $result['list'];
    // }
    //订餐
    public function list()
    {
      if (empty($_GET['id']))
      {
        $res = IndexModel::alldish();
      } else{
        switch ($_GET['id']) {
          case 1:
          $res = IndexModel::sale();
          break;
          case 2:
          $res = IndexModel::sale();
          break;
          case 3:
          $res = IndexModel::stime();
          break;
        }
      }
      $this->assign('res',$res);
    	return $this->fetch();
    }
   	//积分商城
   	public function category()
   	{ 
      $result = IndexModel::credits();
      $this->assign('res',$result);
   		return $this->fetch();
   	}
   	//关于我们
   	public function article_read()
   	{

   		return $this->fetch();
   	}

}
