<?php
	namespace app\admin\controller;
	use app\admin\controller\Auth;
	use app\admin\model\Pj as PjModel;
	class Feedback extends Auth{
		protected $is_login = ['*'];
		protected $pj;
		//评价列表管理
		public function _initialize()
		{
			parent::_initialize();
			$this->pj = new PjModel();
		}
		public function feedback_list()
		{
			$result = $this->pj->pjlist();
			if ($result) {
				$this->assign('result', $result);
			} else {
				$this->assign('result', '');
			}
			return $this->fetch();
		}
		//留言管理
		public function notes_list()
		{
			return $this->fetch();
		}
		
	}