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
			$BookModel = $this->load->model('BookModel');
			$data['book'] = $BookModel->getGeneralBookSkip($page,12);
			$this->load->view('home',$data); 
		}

		public function notfound() {
			$this->load->view('header'); 
			$this->load->view('404'); 
			$this->load->view('footer'); 
		}

	}


?>