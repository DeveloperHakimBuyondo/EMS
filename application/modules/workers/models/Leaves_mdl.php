
<?php

      class Leaves_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Load pending leaves from here
            public function get_all_leaves_data_where_id_matches_my_session($table_name, $emp_id, $status, $value){
                $this->load->model('database/database_connector');
                
                $session_id = $this->session->userdata('emp_id');
                $this->db->join('employees', 'employees.emp_id = leaves.emp_id');
                $query = $this->database_connector->get_all_leaves_data_where_id_matches_my_session($table_name, $emp_id, $status, $value, $session_id);
                return $query;
            }

            // get employees list to use in leave request
            public function get_employees_list($table_name){

                $this->load->model('database/database_connector');
                $query = $this->database_connector->get_employees_list($table_name);
                return $query;

            }

            // Send a leave request from here
            public function send_leave_request_from_me($table_name){
                $this->load->model('database/database_connector');

                    $data = array(
                        'reason' => $this->input->post('reason'),
                        'start_date' => $this->input->post('start_date'),
                        'end_date' => $this->input->post('end_date'),
                        'leave_status' => 0,
                        'emp_id' => $this->session->userdata('emp_id'),
                        'dep_id' => $this->session->userdata('dep_id'),
                        'user_access' => 2
                    );
                    $this->database_connector->send_leave_request_from_worker($table_name, $data);
                    return true;
            }

            // Canceling leave requests from here
            public function cancel_leave_request($table_name, $leave_id, $cancel_id){
                $this->load->model('database/database_connector');
                
                $this->database_connector->canceling_requests_from_me($table_name, $leave_id, $cancel_id);
                return true;
            }

            // Get all leaves data for me
            public function get_all_leaves_data_for_me($table_name, $status, $value, $emp_id){
                $this->load->model('database/database_connector');

                    
                    $session_id = $this->session->userdata('emp_id');
                    $this->db->join('employees', 'employees.emp_id = leaves.emp_id');
                    $query = $this->database_connector->get_all_leaves_data_for_worker($table_name, $status, $value, $emp_id, $session_id);
                    return $query;
                    
            }
      }