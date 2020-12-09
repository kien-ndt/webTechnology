<?php 

	class BookModel extends DModel {

		public function __construct() {
			parent::__construct();
		}

        public function findUser($table, $data){
            
        }

        public function insertBook($table, $data){
			return $this->db->insert($table,$data);
        }

	}






