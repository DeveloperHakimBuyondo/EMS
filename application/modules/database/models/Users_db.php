

<?php

      class Users_db extends CI_Model{
        // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            public function block_user_by_access($table_name){
                $this->db->select('*');
                $this->db->from($table_name);
                $this->db->where('user_access', 1);
                $query = $this->db->get();
                return $query;
            }

            public function block_user_by_username($table_name, $name){
                $this->db->select('*');
                $this->db->from($table_name);
                $this->db->where('username', $name);
                $query = $this->db->get();
                return $query;
            }

            public function block_user_by_dep_id($table_name, $id){
                $this->db->select('*');
                $this->db->from($table_name);
                $this->db->where('dep_id', $id);
                $query = $this->db->get();
                return $query;
            }

            public function register_users_data($table_name, $data){
                $this->db->insert($table_name, $data);
                return true;
            }
      }