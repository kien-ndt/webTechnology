<?php 

	class DModel {

		protected $db = array();

		public function __construct() {
			// $connect = 'mysql:dbname=bookstore; host=localhost; charset=utf8';
			$user = 'root';
			$password = '';
			$dbname = 'webtechnology';
			$server ='localhost';
			$this->db = new Database1($server, $user, $password, $dbname);
			// $user="admin1";
			// $password="123456";
			// $host="localhost";
			// $dbname="bookstore";
			// $this->db = new Database1($host, $user, $password,$dbname);
		}
	}

?>