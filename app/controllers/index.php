<?php

	class index extends DController {

		public function __construct() {
			$data = array();
			parent::__construct();
		}

		public function index() {
			$this->homepage(1);
		}

		public function homepage($page) {
			echo $page;
			$bookModel = $this->load->model('BookModel');
			$data['book'] = $bookModel->getGeneralBookSkip($page,12);

			$data['category'] = $this->load->model("Category")->getNameID();
			
			$this->load->view('home',$data); 
		}

		public function notfound() {
			$this->load->view('header'); 
			$this->load->view('404'); 
			$this->load->view('footer'); 
		}

	}


?>