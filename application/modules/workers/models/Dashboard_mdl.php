
<?php

      class Dashboard_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Get Dashboard Staff
            public function get_dashboard_staff($table_name, $id = FALSE){
                $this->load->model('database/database_connector');

                if($id === FALSE){

                    $query = $this->database_connector->get_all_workers_staff($table_name);
                    return $query;
                }
                    // $query = $this->db->get_where($table_name, array(''))
            }





            // get dashboard stsff by where
            public function get_dashboard_staff_by_where($table_name, $status, $emp_id, $dep_id, $value){
                $id = $this->session->userdata('emp_id');
                // $dp_id = $this->session->userdata('dep_id');
                $this->load->model('database/database_connector');
                $query = $this->database_connector->call_all_workers_dashboard_data_by_where($table_name, $status, $emp_id, $value, $id);
                return $query;
            }

      }