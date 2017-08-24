<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use think\MyCurl;
	class Article extends Auth{
		protected $is_login = ['*'];
		//资讯管理
		public function article_list()
		{
			return $this->fetch();
		}
		//添加咨询
		public function article_add()
		{
			//新闻频道
			$channel = $this->channel();
			$this->assign('channel', $channel);
			return $this->fetch();
		}
		//获取新闻频道
		public function channel()
		{
			$appkey = '00745bbd3dac4ef7';//你的appkey
			$url = "http://api.jisuapi.com/news/channel?appkey=$appkey";
			$result = Mycurl::curlOpen($url);
			$jsonarr = json_decode($result, true);
			if($jsonarr['status'] != 0)
			{
			    echo $jsonarr['msg'];
			    exit();
			}
			return $result = $jsonarr['result'];
			// $this->assign();
			// dump($result);die;
			// $result = implode(', ', $result);
			// echo $result . '<br>';
		}
		//获取新闻
		public function news()
		{
			// http://api.jisuapi.com/news/get?channel=头条&start=0&num=10&appkey=yourappkey
			$num = 1;
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
			// echo $result['channel'].' '.$result["num"]. '<br>';
			dump($result);die;
			foreach($result['list'] as $val)
			{
			    echo $val['title'].' '.$val['time'].' '.$val['src'].' '.$val['category'].' '.$val['pic'].' '.$val['content'].' '.$val['url'].' '.$val['weburl'] . '<br>';
			}

		}
		//关键字搜索新闻
		public function keyword_news()
		{
			$appkey = '00745bbd3dac4ef7';//你的appkey
			$keyword='黄家驹';//utf8 关键字
			$url = "http://api.jisuapi.com/news/search?keyword=$keyword&appkey=$appkey";
			// dump($url);die;
			$result = Mycurl::curlOpen($url);
			$jsonarr = json_decode($result, true);
			// dump($jsonarr);die;
			if($jsonarr['status'] != 0)
			{
			    echo $jsonarr['msg'];
			    exit();
			}
			$result = $jsonarr['result'];
			echo $result['keyword'].' '.$result['num']. '<br>';
			// dump($result);die;
			// dump($result['list'][0]);die;
			foreach($result['list'] as $val)
			{
			    echo $val['title'].' '.$val['time'].' '.$val['src'].' '.$val['category'].' '.$val['pic'].' '.$val['content'].' '.$val['url'].' '.$val['weburl'] . '<br>';
			}
		}
	}