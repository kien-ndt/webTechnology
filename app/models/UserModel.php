<?php 

	class UserModel extends DModel {

		private $table = "customer";

		public function __construct() {
			parent::__construct();
		}

        public function login($table, $username) {
			$sql = "SELECT customer_password FROM $table WHERE customer_email = '$username'";
			$this->db->select($sql);
        	return $this->db->select($sql);; //Dem so tai khoan hop le
        }

        public function getLogin($table, $username, $password) {
        	$sql = "SELECT * FROM $table WHERE customer_email = '$username' AND customer_password = '$password'";
        	return $this->db->selectUser($sql, $username, $password);
        }

	    public function findUserEmail($data){
				$sql = "select * from $this->table where customer_email='$data'";
				$result = $this->db->select($sql);
				if ($result){
					return true;
				}
				else{
					return false;
				}
	        }

	    public function insertUser($data){
			return $this->db->insert($this->table,$data);
	    }

		// public function category($table_category_product) {
		// 	$sql = "SELECT * FROM $table_category_product";
		// 	return $this->db->select($sql);
				
		// }

		// public function categorybyid($table_category_product, $id) {
		// 	$sql = "SELECT * FROM $table_category_product WHERE id_category_product=:id";
		// 	$data = array(':id' => $id);
		// 	return $this->db->select($sql, $data);
				
		// }

		// public function insertcategory($table_category_product, $data) {

		// 	return $this->db->insert($table_category_product, $data);

		// }

		// public function updatecategory($table_category_product, $data, $cond) {
		// 	return $this->db->update($table_category_product, $data, $cond);
		// }
	}






