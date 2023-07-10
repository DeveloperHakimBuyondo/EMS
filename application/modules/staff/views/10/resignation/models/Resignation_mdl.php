
<?php

      class Resignation_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            public function get_resigned_employees($table_name, $status, $value, $id = FALSE){
                $this->load->model('database/database_connector');

                    if($id === FALSE){
                        $query = $this->database_connector->call_all_data_by_where($table_name, $status, $value);
                        return $query;
                    }
                        $query = $this->db->get_where($table_name, array('emp_id' => $id));
                        return $query;
            }
      }