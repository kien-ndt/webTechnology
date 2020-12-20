<?php 

	class OrderModel extends DModel {

		private $table = "shipping";

		public function __construct() {
			parent::__construct();
		}

		public function insertShipping($data) {
			return $this->db->insert($this->table,$data);
		}
		public function selectShippingId() {
			$result = $this->db->selectShipping($this->table);
			print_r($result);
		}

	}

?>