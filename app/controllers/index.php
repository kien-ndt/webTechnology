<?php

	class index extends DController {

		public function __construct() {
			$data = array();
			parent::__construct();
		}

		public function index() {
			$this->homepage(array('page'=>'1'));
		}

		public function homepage($params) {
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
			$data['page']['next'] = (int)$page + 1;

			$bookModel = $this->load->model('BookModel');

			$data['book'] = $bookModel->getGeneralBookSkip($page,12);

			$data['category'] = $this->load->model("Category")->getNameID();
			if (isset($params['category'])) {
				$data['curCategory']=$params['category'];
				$data['book'] = $bookModel->getBookByCategorySkip($params['category'],$page,12);
			}
			else {
				$data['book'] = $bookModel->getGeneralBookSkip($page,12);
			}

			$this->load->view('home',$data); 
		}

		public function notfound() {
			$this->load->view('header'); 
			$this->load->view('404'); 
			$this->load->view('footer'); 
		}

	}


?>