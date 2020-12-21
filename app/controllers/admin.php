<?php

	class Admin extends DController {

		public function __construct() {
			$data = array();
			$message = array();
			parent::__construct();
		}

		public function index() {
			$this->login();
		}


        public function login() {
            
            
            if(Session::get('adminlogin') == true) {
                //Tra ve trang admin khi da dang nhap
                
                header("Location:".BASE_URL."Admin/dashboard");
            }
            $this->load->view('adminLogin');
            
        }

        public function dashboard() {
        	
			if(Session::get('adminlogin') == false) {
				Session::destroy();
				header("Location:".BASE_URL."Admin");
			} else {
				header("Location:".BASE_URL."Admin/product");
			}
        }

        public function signIn() {
        	$adminname = $_POST['adminName'];
            $password = $_POST['adminPassword'];
            $table = 'admin';
            $adminModel = $this->load->model('AdminModel');

            $count = $adminModel->login($table, $adminname, $password);

            if($count == 0) {
                //Neu dang nhap sai tra lai trang login
                echo "Sai tên đăng nhập hoặc mật khẩu";
                header("Location:".BASE_URL."Admin");
            } else {
                // lay thong tin tk & set session
                $result = $adminModel->getLogin($table, $adminname, $password);
                
                Session::set('adminlogin', true);
                Session::set('adminname', $result['admin_email']);
                Session::set('adminid', $result['admin_id']);
                
                header("Location:".BASE_URL."Admin/dashboard");
                
            }
        }

        public function signOut() {
        	Session::init();
			// Session::destroy();
			unset($_SESSION['adminlogin']);
            header("Location:".BASE_URL."Admin");
        }


		public function product(){			//load trang xem danh sach sp, tu do co the them sp
			
			$data['book'] = $this->load->model('BookModel')->getGeneralBookSkip(1,9999);
			$this->load->view('admin',$data);
		}


		public function addProduct() {		//load trang them san pham, co goi den category lay id va name
			$data['category'] = $this->load->model("Category")->getNameID();	//lay category cho nguoi dung chon
			$this->load->view('addProduct',$data); 
		}


		public function insertProduct() {			//khi submit them sp

			$bookModel = $this->load->model('BookModel');

			$product_name = $_POST['product_name'];
			$category_id = $_POST['category_id'];
			
			$product_desc = $_POST['product_desc'];
			$product_price = $_POST['product_price'];
			
			$data = array(
				'category_id' => $category_id,
				'product_name' => $product_name,
				'product_desc' => $product_desc,
				'product_price' => $product_price
			);

			$target_dir = "images/";
			$imageName = time() . '-' . $_FILES["profileImage"]["name"];
			$product_image = $target_dir . basename($imageName);
			if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $product_image)){
				// echo "hinh anh thanh cong";
				$data['product_image'] = $product_image;
			}
			else {
				// echo "loi hinh anh";
				$data['product_image'] = $target_dir."noImg.png";			
			}
			if($bookModel->insert($data)){
				echo "<div>Đã thêm $product_name<div>";
			};
		}

		public function deleteProduct($param){
			$id=$param['id'];
			$bookModel = $this->load->model("BookModel");
			$img = $bookModel->getBookByID($id)[0]['product_image'];
			$res = $bookModel->deleteBookByID($id);
			if ($res){
				if (!($img=="images/noImg.png"))
								unlink($img);
			}
			else {
				echo " ko xoa dc";
			}
		}

		public function searchProduct($param){
			if (isset($param['query']) && $param['query']!="" ){
				$data['book'] = $this->load->model('BookModel')->getGeneralBookWithNameSkip(1,9999, $param['query']);
			}
			else {
				$data['book'] = $this->load->model('BookModel')->getGeneralBookSkip(1,9999);
			}
			$this->load->view('single/admin/productList',$data);
		}


		public function addCategory(){							//load trang them danh muc sp
			$category = $this->load->model("Category");
			$data['category'] = $category->getNameID();
 			$this->load->view('AddCategory',$data); 
		}
		
		public function loadCategoryList(){
				$data['category'] = $this->load->model("Category")->getNameID();
				$this->load->view('single/admin/categoryList',$data);
		}

		public function insertCategory(){						//sau khi sub mit them danh muc
			$category_name = $_POST['category_name'];
			$category_desc = $_POST['category_desc'];
			$data = array(
				'category_name' => $category_name,
				'category_desc' => $category_desc,
			);

			$categorymodel = $this->load->model("Category");
			$res=$categorymodel->findByName($category_name);		//tim xem co category nay hay chua
			if ($res){
				echo "Tên danh mục đã tồn tại";
			}
			else{
				$categorymodel->insert($data);
				echo "Thêm thành công $category_name";
			}
		}

		public function deleteCategory($param){
			if (isset($param['id'])){
				$id=$param['id'];
				$bookModel = $this->load->model("BookModel");
				$bookModel->deleteBookByCategoryID($id);
				$categoryModel = $this->load->model("Category");

				$categoryModel->deleteByID($id);
			}
		}

	}


?>