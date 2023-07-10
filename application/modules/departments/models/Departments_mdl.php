
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

            // Add department from here
            public function add_departments_data($table_name){
                $this->load->model('database/database_connector');
                    $data = array(
                        'dep_name' => $this->input->post('dep_name'),
                    );
                    $this->database_connector->add_data($table_name, $data);
                    return true;
            }

            // Update department data here
            public function update_department_data($table_name, $update_id){
                $data = array(
                    'dep_name' => $this->input->post('dep_name'),
                );
                $id = $this->input->post('id');
                $this->load->model('database/database_connector');
                $this->database_connector->update_data($table_name, $update_id, $id, $data);
                return true;
            }

            // Delete department / row here
            public function delete_department($table_name, $delete_id, $id){
                $this->load->model('database/database_connector');
                $this->database_connector->delete_data($table_name, $delete_id, $id);
                return true;
            }
      }