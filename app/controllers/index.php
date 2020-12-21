<?php

	class Index extends DController {

		public function __construct() {
			$data = array();
			parent::__construct();
		}

		public function index() {
			$this->homepage(array('page'=>'1'));
		}

		public function homepage($params) {
			$bookModel = $this->load->model('BookModel');
			if (isset($params['search'])){
				$countBook=(int)$bookModel->getCountBookName($params['search']);
			}
			else
				if (isset($params['category']))
					$countBook=(int)$bookModel->getCountBookCategory($params['category']);
				else
					$countBook=(int)$bookModel->getCountBook();
			$countitem=(int)20;
			if (!isset($params['page'])) 
				$page = 1;
			else
				$page = $params['page'];
				
			$data['page']=array();
			if ((int)$page<=1){
				$page=1;
			}
			else{
				$data['page']['pre'] = (int)$page - 1;
			}

			$data['page']['cur'] = $page;
			$maxpage = floor( $countBook/  (int)$countitem);
			if ($maxpage!=$countBook/(int)$countitem){
				$maxpage = (int)$maxpage + 1;
			}
			if ((int)$page+1<=$maxpage){
				$data['page']['next'] = (int)$page + 1;
			}


			$data['book'] = $bookModel->getGeneralBookSkip($page,$countitem);

			$data['category'] = $this->load->model("Category")->getNameID();

			if (isset($params['category'])) {
				$data['curCategory']=$params['category'];
				$data['book'] = $bookModel->getBookByCategorySkip($params['category'],$page,$countitem);
			}
			else {
				$data['book'] = $bookModel->getGeneralBookSkip($page,$countitem);
			}

			if (isset($params['search'])){
				$search = ltrim($params['search']);
				$data['book'] = $bookModel->getBookByName($search,$page,$countitem);
				$data['search'] = $search;
			}
			$this->load->view('home',$data); 
		}

		public function notfound() {
			 
			$this->load->view('404'); 
			
		}

	}


?>