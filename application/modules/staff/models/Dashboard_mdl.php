
<?php

      class Dashboard_mdl extends CI_Model{
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Cantact Database_connector for all Employee data...
            public function get_dashboard_data($table_name, $id = FALSE){
                $this->load->model('database/database_connector');
                $query = $this->database_connector->call_all_data($table_name);
                return $query;
            }

            // Getting data by where clause
            public function get_data_by_where($table_name, $status, $value){
                $this->load->model('database/database_connector');
                $query = $this->database_connector->call_all_data_by_where($table_name, $status, $value);
                return $query;
            }


            // Getting data by id
            public function get_data_by_id($table_name, $dep_id){

                $id = $this->session->userdata('department_id');
                $this->load->model('database/database_connector');
                $query = $this->database_connector->call_all_data_by_id($table_name, $dep_id, $id);
                return $query;
            }


            // Getting data by id
            public function get_data_by_id_activity($table_name, $status, $dep_id, $value){

                $id = $this->session->userdata('department_id');
                $this->load->model('database/database_connector');
                $query = $this->database_connector->call_all_data_by_id_activity($table_name, $status, $dep_id, $value, $id);
                return $query;
            }
      }