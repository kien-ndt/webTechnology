<?php

	class index extends DController {

		public function __construct() {
			$data = array();
			parent::__construct();
		}

		public function index() {
			$this->homepage();
		}

		public function homepage() {
			$this->load->view('home'); 
		}

		public function notfound() {
			$this->load->view('header'); 
			$this->load->view('404'); 
			$this->load->view('footer'); 
		}

	}


?>