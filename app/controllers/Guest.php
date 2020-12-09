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
			$result = $usermodel->insertUser('user', $data);
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
