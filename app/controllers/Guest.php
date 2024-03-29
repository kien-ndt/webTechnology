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
            $customer_password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
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

            $res = $userModel->login($table, $username);

            if(!isset($res[0])) {
                //Neu dang nhap sai tra lai trang login
                echo "Sai tên đăng nhập hoặc mật khẩu";
            } else {
                // lay thong tin tk & set session
                if (password_verify($password,$res[0]['customer_password'])){
                    $result = $userModel->getLogin($table, $username, $res[0]['customer_password']);
                    
                    Session::set('login', true);
                    Session::set('username', $result['customer_email']);
                    Session::set('userid', $result['customer_id']);
                    echo "Đăng nhập thành công";
                }
                else 
                    echo "Sai tên đăng nhập hoặc mật khẩu";
                
            }
        }

        public function logout() {
            
            if ($_SESSION['login']==true){
                unset($_SESSION['login']);
            }
            header("Location:".BASE_URL."index");
        }

        public function productDetail($param){
            if (isset($param['id'])){
                $id = $param['id'];
                $data['book'] = $this->load->model('BookModel')->getBookByID($id);
                if (!sizeof($data['book'])>0){
                    header("Location:".BASE_URL."index/notfound");
                    return;
                }
                else{
                    $data['book'] = $data['book'][0];
                    $this->load->view('InfoProduct',$data);
                }
            }
            else{
                header("Location:".BASE_URL."index/notfound");
            }
        }

        // public function search($param){
        //     if (isset($param['search'])){
        //         $search = $param['search'];
        //         $book = $this->load->model('BookModel');
        //         $data['book'] = $book->getBookByNameSuggest($search);
        //         $this->load->view('single/page/bookSearchName',$data);
        //     }
        // }
    }
