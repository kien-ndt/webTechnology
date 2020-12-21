<?php
    class Ajax{
        private $request;
        
        // xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest"); 
        public function __construct(){
            $this->request = array(
                "admin"=>array(
                    "searchProduct",
                    "insertProduct",
                    "insertCategory",
                    "deleteProduct",
                    "loadCategoryList",
                    "deleteCategory"
                ),
                "cart"=>array(
                    "addProductToCart",
                    "showCart",
                ),
                "guest"=>array(
                    "signUp",
                    "signIn",
                ),
            );
        }

        public function isAjax($controller, $method){
            $controller = strtolower($controller);
            $method = strtolower($method);
            if (!isset($this->request[$controller])) return false;
            foreach ($this->request[$controller] as $value){
                if (strtolower($value) == strtolower($method)) return true;
            }
            return false;
        }
    }