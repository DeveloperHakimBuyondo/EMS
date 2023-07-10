
<?php

      class Departments_mdl extends CI_Model{
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Get All Departments
            public function get_departments_data($table_name, $id = FALSE){
                $this->load->model('database/database_connector');

                    if($id === FALSE){
                        $query = $this->database_connector->call_all_data($table_name);
                        return $query;
                    }
                        $query = $this->db->get_where($table_name, array('dep_id' => $id));
                        return $query->row_array();
            }
      }