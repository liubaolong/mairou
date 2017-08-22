<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	class Charts extends Auth{
		//折线图
		public function charts_1()
		{
			return $this->fetch();
		}
		//时间轴折线图
		public function charts_2()
		{
			return $this->fetch();
		}
		//区域折线图
		public function charts_3()
		{
			return $this->fetch();
		}
		//柱状折线图
		public function charts_4()
		{
			return $this->fetch();
		}
		//饼状图
		public function charts_5()
		{
			return $this->fetch();
		}
		//3D柱状图
		public function charts_6()
		{
			return $this->fetch();
		}
		//3D饼状图
		public function charts_7()
		{
			return $this->fetch();
		}
	}