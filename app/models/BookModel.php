<?php 

	class BookModel extends DModel {

		public function __construct() {
			parent::__construct();
		}
		private $table = "product";

		public function getCountBook(){
			return $this->db->countRecords($this->table);
		}

		public function getCountBookCategory($category){
			$sql = "SELECT COUNT(*) as count from $this->table, category_product
					where $this->table.category_id = category_product.category_id
					and category_product.category_name = '$category'";
			$res = $this->db->select($sql);
			if (!empty($res)){
				return $res[0]['count'];
			}
			else return 0;

		}

		public function getCountBookName($name){
			$sql = "SELECT COUNT(*) as count from $this->table
					where $this->table.product_name like '%$name%'";
			$res = $this->db->select($sql);
			if (!empty($res)){
				return $res[0]['count'];
			}
			else return 0;

		}

		public function getGeneralBookSkip($step,$num){
			$offset = ((int) $step - 1) * (int)$num;
			$sql = "select * from $this->table, category_product 
					where $this->table.category_id = category_product.category_id   
					ORDER BY product_id DESC limit $num offset $offset;";
		
			return $this->db->select($sql);  
		}

		public function getGeneralBookWithNameSkip($step, $num, $string){
			$offset = ((int) $step - 1) * (int)$num;
			$sql = "select * from $this->table, category_product 
					where $this->table.category_id = category_product.category_id
					and $this->table.product_name like '%$string%'
					ORDER BY product_id DESC limit $num offset $offset;";
		
			return $this->db->select($sql);
		}

		public function getBookByCategorySkip($category,$step,$num){
			$offset = ((int) $step - 1) * (int)$num;
			$sql = "select * from $this->table, category_product 
					where $this->table.category_id = category_product.category_id   
					and category_product.category_name = '$category'
					ORDER BY product_id DESC limit $num offset $offset;";
		
			return $this->db->select($sql);  
		}

		public function getBookByID($id){
			$sql = "select * from $this->table where product_id=$id";
			return $this->db->select($sql);  
		}


		public function deleteBookByID($id){
			$sql = "delete from $this->table where product_id=$id";
			return $this->db->deleteRecords($sql);
		}

        public function insert($data){
			return $this->db->insert($this->table,$data);
        }

		public function setTable($table){
			$this->table = $table;
		}

		public function getBookByName($name,$step,$num){
			$offset = ((int) $step - 1) * (int)$num;
			$sql = "select * from $this->table
					where $this->table.product_name like '%$name%'    
					ORDER BY product_id DESC limit $num offset $offset;";
			return $this->db->select($sql);  
		}

		public function getBookByNameSuggest($name){
			$sql = "select * from $this->table
					where $this->table.product_name like '%$name%'    
					ORDER BY product_id DESC limit 5";
			return $this->db->select($sql);  
		}
	}






