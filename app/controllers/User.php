<?php
    class User extends DController{
        protected $data;
        protected $message;
        public function __construct() {
			$data = array();
			$message = array();
			parent::__construct();
		}
        public function viewProduct(){

        }

        public function addProductToCart(){
            
        }

        public function logOut(){
            unset($_SESSION['role']);
            header("Location:".BASE_URL);
        }
    }


