<?php
namespace app\index\controller;
use think\Controller;
use think\MyCurl;
use app\index\model\Index as IndexModel;
use app\index\model\Bk as BkModel;
use think\Request;
class Index extends Controller
{
    protected $bk;
    public function _initialize()
    {
      parent::_initialize();
      $this->bk = new BkModel();
    }
	//首页
    public function index(Request $request)
    {  
        $config = config('view_replace_str.__WEB_ISCLOSE__');
        $info = '';
        if ($config) {
          return $this->assign('info', '站点维护中');
           $this->assign('web_isclose',$config);

          /* {neq name="web_isclose" value=""}
           {else/}
            站点维护中。。。。
            {/neq}*/

           
        } else {
          $this->assign('info', '');
          $stor = '东城区';
          $res  = IndexModel::store($stor);
          //查询热门菜
          $dish = IndexModel::hotdish();
          // //新闻标题
          $donews = $this->donews();
          $this->assign('donews', $donews);
          $this->assign('dish', $dish);
          $this->assign('str',$res);

          $this->assign('web_isclose',$config);
          return $this->fetch();
        }
        
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
    // 新闻内容展示
    public function news(Request $request)
    {

      $showNews = $this->donews();
      $nid = $_GET['id'] - 1;
      if (array_key_exists($nid, $showNews)) {
        $this->assign('showNews', $showNews[$nid]);
      } else {
        $this->error('非法操作', 'index/index/index');
      }
      return $this->fetch();
    }
    //通过关键字搜索新闻
    public function searchnews()
    {
      // dump('snews');die;
      $appkey = '00745bbd3dac4ef7';//你的appkey
      $keyword=input('snews');//utf8 关键字
      $num = 1;
      $url = "http://api.jisuapi.com/news/search?keyword=$keyword&num=$num&appkey=$appkey";
      $result = Mycurl::curlOpen($url);
      $jsonarr = json_decode($result, true);
      if($jsonarr['status'] != 0)
      {
          echo $jsonarr['msg'];
          exit();
      }
      $result = $jsonarr['result'];
      return $result['list'][0]['content'];
    }
    // 获取新闻
    public function donews()
    {
      // http://api.jisuapi.com/news/get?channel=头条&start=0&num=10&appkey=yourappkey
      $num = 3;
      $appkey = '00745bbd3dac4ef7';//你的appkey
      $channel='头条';//utf8 新闻频道(头条,财经,体育,娱乐,军事,教育,科技,NBA,股票,星座,女性,健康,育儿)
      $url = "http://api.jisuapi.com/news/get?channel=$channel&start=0&num=$num&appkey=$appkey";
      $result = Mycurl::curlOpen($url);
      $jsonarr = json_decode($result, true);
      if($jsonarr['status'] != 0)
      {
          echo $jsonarr['msg'];
          exit();
      }
      $result = $jsonarr['result'];
      return $result['list'];
    }
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

      //分类展示
      $flres = $this->bk->chabk();
     // dump($flres);die;
      // $dd = [];
      // foreach ($flres as $k => $v) {
      //   // if ($v['parentid'] = $v['b_id']) {
      //   //   $dd[] = $v['b_id'];
      //     // dump($v['b_id']);
      //   }
      // }
      // dump($dd);
      // die;
      if ($flres) {
         foreach ($flres as $k => $v) {
           $pathLength = substr_count($v['path'], ',');
           switch($pathLength){
             case 1:
                $res1[$v['b_id']] = $v['b_name'];
                // dump()
                break;
             case 2:
                $res2[$v['b_id']] = $v['b_name'];
                break;
             case 3:
                $res3[$v['b_id']] = $v['b_name'];
                break;
             case 4:
                $res4[$v['b_id']] = $v['b_name'];
                break;
           }
           
         }
     }   
         // dump($res1);
         // dump($res2);
         // dump($res3);
         // dump($res4);die;
        // $res1 = $this->onefl();
        // $res2 = $this->twofl();
        // die;
         //将每级分配到页面
         // dump($res1);die;
        // dump(array_column($res1),'');die;
         // dump($res2);die;
          $this->assign('res1', $res1);
         $this->assign('res2', $res2);
         $this->assign('res3', $res3);
         $this->assign('res4', $res4);

         // $this->assign('flres', $flres);
      // } else {
      //    $this->assign('flres', '');
      // } 
    	return $this->fetch();
    }
   	//积分商城
   	public function category()
   	{ 
      $result = IndexModel::credits();
      $res    = IndexModel::hotstore();
      $this->assign('res',$result);
      $this->assign('result',$res);
   		return $this->fetch();
   	}
   	//关于我们
   	public function article_read()
   	{
      //天气展示
      $weather = $this->weather();
      
      // dump($weather);die;
      $this->assign('weather', $weather);
      $this->assign('index', $weather['index']);
      $this->assign('result', $weather);
   		return $this->fetch();
   	}

    //一级分类
    public function onefl()
    {
      $res1 = $this->bk->onefl();
      if ($res1) {
        return $res1;
      } else {
        return false;
      }
    }
    //二级分类
    // public function twofl()
    // {
    //   $res1 = $this->onefl();
    //   $b_id = [];
    //   foreach ($res1 as $k => $v) {
    //     // dump($v['b_id']);
    //     $res2 = $this->bk->twofl($v['b_id']);
    //   }
    //   // dump($b_id);
    //   // dump($res2);
    //   // $res2 = $this->twofl();
    //   // return $b_id;
    //   return $res2;
    // }
    public function twofl()
    {
      // dump(input());die;
      $res2 = $this->bk->twofl(input('b_id');
      if ($res2) {
        return json(1);
      } else {
        return json(0);
      }
    }
    //三级分类
    public function threefl()
    {

    }
    //四级分类
    public function fourfl()
    {

    }


    //天气
    public function weather()
    {

      $appkey = '00745bbd3dac4ef7';//你的appkey
      $city = '北京';//utf8_decode(data)
      $cityid='1';//任选
      $citycode='101010100 ';//任选
      $url = "http://api.jisuapi.com/weather/query?appkey=$appkey&city=$city";
      $result = Mycurl::curlOpen($url);
      $jsonarr = json_decode($result, true);
      //exit(var_dump($jsonarr));
      if($jsonarr['status'] != 0)
      {
          echo $jsonarr['msg'];
          exit();
      }
      $result = $jsonarr['result'];
      return $result;
    }
}
