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
			$sql = "select * FROM $this->table ORDER BY shipping_id DESC limit 1";
			$res = $this->db->select($sql);
			if (isset($res[0]['shipping_id'])){
				return $res[0]['shipping_id'];
			}
			else return null;
		}

	}

?>