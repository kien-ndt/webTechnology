<?php 

	class BookModel extends DModel {

		public function __construct() {
			parent::__construct();
		}
		private $table = "product";
        public function findUser($table, $data){
            
        }

		public function getGeneralBookSkip($step,$num){
			$offset = ((int) $step - 1) * (int)$num;
			$sql = "select * from $this->table ORDER BY product_id DESC limit $num offset $offset;";
			echo $sql;
			return $this->db->select($sql);  
		}
        public function insert($data){
			$this->db->insert($this->table,$data);
        }

		public function setTable($table){
			$this->table = $table;
		}
	}






