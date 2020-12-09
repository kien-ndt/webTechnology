<?php
    class product extends DModel {
        public function insertProduct($table, $data){
            $this->db->insert($table, $data);
        }
    }