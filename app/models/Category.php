<?php
    class Category extends DModel{

        private $table = "category_product";
        public function __construct(){
            parent::__construct();
        }

        public function getNameID(){
            $sql = "select category_id,category_name,category_desc from $this->table order by category_id desc";
            return $this->db->select($sql);     //list[3]['category_id]
        }
        public function findByName($name){
            $sql = "select * from $this->table where category_name='$name'";
            return $this->db->select($sql);
        }
        public function findByID($id){
            $sql = "select * from $this->table where category_id='$id'";
            return $this->db->select($sql);
        }

        public function deleteByID($id){
            $sql = "delete from $this->table where category_id=$id";
            return $this->db->deleteRecords($sql);
        }

        public function insert($data){
            $this->db->insert($this->table,$data);
        }

        public function setTable($table){
            $this->table = $table;
        }
    }