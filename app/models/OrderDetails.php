<?php 

	class OrderDetails extends DModel {
        private $table1 = "orders";
		public function __construct() {
			parent::__construct();
		}

		public function insertOrders($data) {
            $this->db->insert($this->table1,$data);
            
            $sql = "select TOP 1 * FROM $this->table1 ORDER BY order_id DESC";
            
            
        }
        

	}

?>