<?php
    class Guest extends DController{

        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->login();
        }

        public function login() {
            $this->load->view('header');
            $this->load->view('single/page/login_register');
            $this->load->view('footer');
        }

        public function home() {
            echo 'Trang User';
        }

        public function signUp() {
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            // $username = $_POST["username"];
            $pass = $_POST["pass"];
            $gender = $_POST["gender"];
            $birthdate = $_POST["birthday"];
            $data = array(
                	'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    // 'username' => $username,
                    'pass' => $pass,
                    'gender' => $gender,
                    'birthdate' => $birthdate
            );           
			
			$usermodel = $this->load->model('UserModel');
			$result = $usermodel->insertUser('user', $data);
            // echo "result is $result kk";
            
			// if($result == 1) {
			// 	echo "Thêm dữ liệu thành công";
			// } else {
			// 	echo "Thêm dữ liệu thất bại";
			// }
        }

        public function signIn() {
            $username = $_POST['userEmail'];
            $password = $_POST['userPassword'];
            $table = 'customer';
            $userModel = $this->load->model('UserModel');

            $count = $userModel->login($table, $username, $password);

            if($count == 0) {
                //Neu dang nhap sai tra lai trang login chua co css
                header("Location:".BASE_URL."guest");
            } else {
                //Dang nhap thanh cong 
                header("Location:".BASE_URL."guest/home");
            }
        }
    }
