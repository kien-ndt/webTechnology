<?php 

	class UserModel extends DModel {

		public function __construct() {
			parent::__construct();
		}

        public function login($table, $username, $password) {
        	$sql = "SELECT * FROM $table WHERE customer_email = '$username' AND customer_password = '$password'";
        	return $this->db->affectedRows($sql, $username, $password); //Dem so tai khoan hop le
        }

        public function insertUser($table, $data) {
			return $this->db->insert($table,$data);
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






