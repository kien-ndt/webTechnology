<?php
    class Guest extends DController{

        public function signUp(){
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $pass = $_POST["pass"];
            $gender = $_POST["gender"];
            $birthdate = $_POST["birthday"];
            $data = array(
                	'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'username' => $username,
                    'pass' => $pass,
                    'gender' => $gender,
                    'birthdate' => $birthdate
            );           
			
            $usermodel = $this->load->model('UserModel');
            if ($usermodel->findUserEmail($email)){
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

        public function signIn(){
            
        }
    }
