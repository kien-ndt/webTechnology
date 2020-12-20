<?php 

	class OrderDetails extends DModel {
		private $table1 = "orders";
		private $table2 = "order_details";
		public function __construct() {
			parent::__construct();
		}

		public function insertOrders($data) {
            $this->db->insert($this->table1,$data);
            
            $sql = "select * FROM $this->table1 ORDER BY order_id DESC limit 1";
			$res = $this->db->select($sql);
			if (isset($res[0]['order_id'])){
				return $res[0]['order_id'];
			}
			else return null;
        }
		
		public function insertOrderDetails($data){
			$this->db->insert($this->table2,$data);
		}

	}

?>