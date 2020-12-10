<?php 

class Main {

	public $url;
	public $controllerName = "index";// ten class
	public $methodName = "index";
	public $controllerPath = "app/controllers/";
	public $param;
	public $controller;

	public function __construct() {
		$this->getUrl();
		$this->loadController();
		$this->callMethod();
	}

	public function getRole(){
		if (isset($_SESSION['role'])){
			return $_SESSION['role'];
		}
		else {
			return "guest";
		}
	}

	public function getUrl() {
		$this->url = isset($_GET['url']) ? $_GET['url'] : NULL;

		$this->param = $_GET;		
		unset($this->param['url']);		//bo tham so ?url=...
	
		$_SESSION['role']='admin';
		// unset($_SESSION['role']);
		define('ROLE', $this->getRole());

		if($this->url!=NULL) {
			$this->url = rtrim($this->url, '/'); // Bo ki tu '/' o cuoi
			$this->url = explode('/', filter_var($this->url, FILTER_SANITIZE_URL)); //Bo ki tu '/' trong chuoi
		} else {
			unset($this->url);
		}
	}

	public function loadController() {
		if(!isset($this->url[0])) {
			include $this->controllerPath.$this->controllerName.'.php';

			$this->controller = new $this->controllerName();
			
		} else {

			$this->controllerName = $this->url[0];
			$fileName = $this->controllerPath.$this->controllerName.'.php';

			if(file_exists($fileName)) {//Neu ton tai file trong controller
				include $fileName;
				if(class_exists($this->controllerName)) { // Neu ton tai class
					$this->controller = new $this->controllerName();
				} else {

				}
			} else {

			}
		}
	}


	public function callMethod() {
		if(!empty($this->param)) {
			//?url=category [0]/update_category [1]/24 [2]
			$this->methodName = $this->url[1];
			if(method_exists($this->controller, $this->methodName)) {
				$this->controller->{$this->methodName}($this->param);
			} else {
				header("Location:".BASE_URL."index/notfound");
			}
		} else {
			if(isset($this->url[1])) {
				$this->methodName = $this->url[1];
				if(method_exists($this->controller, $this->methodName)) {
					$this->controller->{$this->methodName}();// Goi method trong class $this->controller
				} else {
					header("Location:".BASE_URL."index/notfound");
					die();
				}
			} else { // Khong ton tai ham truyen vao
				if(method_exists($this->controller, $this->methodName)) {
					$this->controller->{$this->methodName}();// Goi method trong class $this->controller
				} else {
					header("Location:".BASE_URL."index/notfound");
					die();

				}
			}
		}
	}

}




?>