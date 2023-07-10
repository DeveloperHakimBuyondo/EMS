
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


            // Calculate Salary
            public function calculate_salary($table_name, $table_id, $emp_status, $value, $table_column, $id = FALSE){
                
                $this->load->model('database/database_connector');
                if($id === FALSE){

                    $query = $this->database_connector->calculate_salary($table_name, $emp_status, $value,  $table_column);
                    return $query;
                }
                    $query = $this->db->get_where($table_name, array($table_id => $id));
                    return $query->row_array();
            }

            // Adding data to the dashboard
            public function add_dashboard_data($table_name){
                $this->load->model('database/database_connector');

                $data = array(
                    'list_name' => $this->input->post('list_name'),
                );
                $this->database_connector->add_data($table_name, $data);
                return true;
            }

            // Delete Dashboard Data
            public function delete_dashboard_data($table_name, $list_id, $id){
                $this->load->model('database/database_connector');
                $this->database_connector->delete_data($table_name, $list_id, $id);
                return true;
            }
      }