<?php
    class Category extends DModel{

        private $table = "category_product";
        public function __construct(){
            parent::__construct();
        }

        public function getNameID(){
            $sql = "select category_id,category_name from $this->table";
            return $this->db->select($sql);     //list[3]['category_id]
        }
        public function findByName($name){
            $sql = "select * from $this->table where category_name='$name'";
            return $this->db->select($sql);
        }

        public function insert($data){
            $this->db->insert($this->table,$data);
        }

        public function setTable($table){
            $this->table = $table;
        }
    }