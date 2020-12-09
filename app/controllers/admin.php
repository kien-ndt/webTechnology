<?php

	class admin extends DController {

		public function __construct() {
			$data = array();
			$message = array();
			parent::__construct();
		}


		public function product(){
			$this->load->view('admin');
		}

		public function addProduct() {
			
			$this->load->view('addProduct'); 
		}

		public function addCategory(){
			$this->load->view('AddCategory'); 
		}

		public function insertCategory(){
			$category_name = $_POST['category_name'];
			$category_desc = $_POST['category_desc'];
			$data = array(
				'category_name' => $category_name,
				'category_desc' => $category_desc,
			);

			$categorymodel = $this->load->model("Category");
			$res=$categorymodel->findByName($category_name);
			if ($res){
				echo "Tên sản phẩm đã tồn tại";
			}
			else{
				$categorymodel->insert($data);
				echo "Thêm thành công $category_name";
			}
		}

		public function insertProduct() {
			// $bookModel = $this->load->model('BookModel');
			// $categorymodel = $this->load->model('product');
			// $table = 'book';
			// $title = $_POST['id'];
			// $desc = $_POST['name'];

			// $data = array(
			// 	'title_category_product' => $title,
			// 	'desc_category_product' => $desc
			// );

			// $result = $categorymodel->insertcategory($table, $data);
			
			// if($result == 1) {
			// 	$message['msg'] = "Thêm dữ liệu thành công";
			// } else {
			// 	$message['msg'] = "Thêm dữ liệu thất bại";
			// }
			
			// $this->load->view('addcategory', $message);
			// echo $_POST['CustomField'];
			// echo $_FILES["profileImage"]["tmp_name"];

			$target_dir = "images/";
			$profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
			$target_file = $target_dir . basename($profileImageName);
			if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)){
				echo "ok";
				$data = array(
                	'img' => $target_file
				);
				// $result = $bookModel->insertBook('testaddbook', $data);
			}
			else echo "ko ok";
			// echo "ok";

			// $MY_FILE = $_FILES["profileImage"]["tmp_name"];
 
			// // To open the file and store its contents in $file_contents
			// $file = fopen($MY_FILE, 'r');
			// $other = fopen("images/test.jpg","w");

			// $file_contents = fread($file, filesize($MY_FILE));

			// fwrite($other,$file_contents);
			// fclose($file);
			// fclose($other);
			// $file_contents = addslashes($file_contents);
			// echo '<img src="data:image/jpeg;base64,'.base64_encode( $file_contents).'"/>';
		}
	}


?>