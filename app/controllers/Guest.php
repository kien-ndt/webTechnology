<?php
    class Guest extends DController{

        public function __construct() {
            parent::__construct();
        }

        // public function index() {
        //     $this->login();
        // }

        // public function login() {
            
        //     Session::init();
        //     if(Session::get('login') == true) {
        //         //Tra ve trang home khi nguoi dung da dang nhap
        //     }
        //     $this->load->view('single/page/login_register');
            
        // }

        // public function home() {
        //     Session::checkSession();
        //     echo 'Trang User';
        // }

        public function signUp() {
            $customer_name = $_POST["name"];
            $customer_phone = $_POST["phone"];
            $customer_email = $_POST["email"];
            $customer_password = $_POST["pass"];
            $customer_gender = $_POST["gender"];
            $customer_birthday = $_POST["birthday"];
            $data = array(
                	'customer_name' => $customer_name,
                    'customer_phone' => $customer_phone,
                    'customer_email' => $customer_email,
                    'customer_password' => $customer_password,
                    'customer_gender' => $customer_gender,
                    'customer_birthday' => $customer_birthday
            );           
			
            $usermodel = $this->load->model('UserModel');
            if ($usermodel->findUserEmail($customer_email)){
                echo "Email đã tồn tại";
            }
            else{
                $result = $usermodel->insertUser($data);
                if($result == 1) {
                    echo "Đăng kí thành công";
                } else {
                    echo "Đăng kí thất bại";
                }
            }
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
                //Neu dang nhap sai tra lai trang login
                echo "Sai tên đăng nhập hoặc mật khẩu";
            } else {
                // lay thong tin tk & set session
                $result = $userModel->getLogin($table, $username, $password);
                
                Session::set('login', true);
                Session::set('username', $result['customer_email']);
                Session::set('userid', $result['customer_id']);
                
                echo "Đăng nhập thành công";
                
            }
        }

        public function logout() {
            
            Session::destroy();
            header("Location:".BASE_URL."index");
        }
    }
