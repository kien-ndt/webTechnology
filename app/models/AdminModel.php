<?php 

	class AdminModel extends DModel {

		public function __construct() {
			parent::__construct();
		}

        public function login($table, $adminname, $password) {
        	$sql = "SELECT * FROM $table WHERE admin_email = '$adminname' AND admin_password = '$password'";
        	return $this->db->adminCount($sql, $adminname, $password); //Dem so tai khoan hop le
        }

        public function getLogin($table, $adminname, $password) {
        	$sql = "SELECT * FROM $table WHERE admin_email = '$adminname' AND admin_password = '$password'";
        	return $this->db->selectAdmin($sql, $adminname, $password);
        }

	}


?>