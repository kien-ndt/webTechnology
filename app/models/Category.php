<?php
    class Category extends DModel{

        private $table = "category_product";
        public function __construct(){
            parent::__construct();
        }

        public function getName(){
            $sql = "select category_name from $this->table";
            return $this->db->select($sql);
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