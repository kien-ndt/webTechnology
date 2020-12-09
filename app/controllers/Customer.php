<?php
    class Customer extends DController{
        public function viewProduct(){

        }

        public function addProductToCart(){
            
        }

        public function logOut(){
            unset($_SESSION['role']);
            header("Location:".BASE_URL);
        }
    }


