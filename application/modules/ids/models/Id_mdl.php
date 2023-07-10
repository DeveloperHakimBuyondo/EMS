
<?php

      class Id_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // load employees login ids from here
            public function get_employees_login_id($table_name, $id_desc){
                $this->load->model('database/database_connector');
                $query = $this->database_connector->call_all_data_by_id_desc($table_name, $id_desc);
                return $query;
            }

                // Updating Employee info from here
                public function update_id($table_name, $update_id, $image){
                    $this->load->model('database/database_connector');
                                    
                    $data = array(
                        'emp_image' => $image,
                        'employee_id' => $this->input->post('employee_id')
                    );
    
                    $id = $this->input->post('id');
                    $this->database_connector->update_data($table_name, $update_id, $id, $data);
                    return true;
    
                }
      }