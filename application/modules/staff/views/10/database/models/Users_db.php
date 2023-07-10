

<?php

      class Users_db extends CI_Model{
        // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            public function register_users_data($table_name, $data){
                $this->db->insert($table_name, $data);
                return true;
            }
      }