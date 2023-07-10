
<?php

      class Leaves_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Getting Leaves Data from Here
            public function get_leaves_data($table_name, $table_id = FALSE, $id = FALSE){
                $this->load->model('database/database_connector');

                    if($id === FALSE){

                        if($table_name === 'employees'){
                            // $this->db->join('employees', 'employees.emp_id = leaves.emp_id');
                            $query = $this->database_connector->call_all_data($table_name);
                            return $query;
                        }else{

                            $this->db->join('leaves', 'leaves.emp_id = employess.emp_id');
                            $query = $this->database_connector->call_all_data($table_name);
                            return $query;
                        }

                    }
                        $query = $this->db->where($table_name, array($table_id => $id));
                        return $query->row_array();
            }

                        // Getting Leaves Data By Where clause
                        public function get_leaves_data_by_where($table_name, $status, $value, $id = FALSE){
                            $this->load->model('database/database_connector');
            
                                if($id === FALSE){
                                    $this->db->join('employees', 'employees.emp_id = leaves.emp_id');
                                    $query = $this->database_connector->call_all_data_by_where($table_name, $status, $value);
                                    return $query;
                                }
                                    $query = $this->db->where($table_name, array($table_id => $id));
                                    return $query->row_array();
                        }

                        // Get Employee in leaves by where clouse
                        public function get_employee_data_by_where($table_name, $status, $value, $id = FALSE){
                            $this->load->model('database/database_connector');

                            if($id === FALSE){
                                $query = $this->database_connector->call_all_data_by_where($table_name, $status, $value);
                                return $query;
                            }
                                $query = $this->db->where($table_name, array($table_id => $id));
                                return $query->row_array();

                        }

            // Requesting for leave here
            public function request_leave($table_name){
                $this->load->model('database/database_connector');

                    $data = array(
                        'reason' => $this->input->post('reason'),
                        'start_date' => $this->input->post('start_date'),
                        'end_date' => $this->input->post('end_date'),
                        'emp_id' => $this->input->post('emp_id'),
                        'leave_status' => 0,
                        'dep_id' => $this->session->userdata('department_id'),
                        'user_access' => $this->session->userdata('user_access')

                    );
                    $this->database_connector->add_data($table_name, $data);
                    return true;
            }

            // Update leave request either accept or reject
            public function update_leave_request($table_name, $update_id, $value, $id){
                $this->load->model('database/database_connector');
                    $data = array(
                        'leave_status' => $value,
                        'user_access' => $this->session->userdata('user_access')
                    );
                    $this->database_connector->update_data($table_name, $update_id, $id, $data);
                    return true;
            }
      }