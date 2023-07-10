<?php

      class Salary_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Load Salary Information from here
            public function get_all_salary_info($table_name, $emp_id){
                $this->load->model('database/database_connector');

                $id = $this->session->userdata('emp_id');
                $this->db->join('departments', 'departments.dep_id = employees.dep_id');
                $query = $this->database_connector->get_all_salary_info($table_name, $emp_id, $id);
                return $query;
            }

            // Request For salary increment from here
            public function request_salary($table_name, $employee){
                $this->load->model('database/database_connector');

                    $data = array(
                        'employee_id' => $employee,
                        'message' => $this->input->post('message'),
                        'status' => 0,
                        'dep_id' => $this->session->userdata('dep_id'),
                        'emp_id' => $this->session->userdata('emp_id'),
                        'user_access' => 2
                    );
    
                    $this->database_connector->send_salary_request($table_name, $data);
                    return true;

            }

            // Load all my salary requests from here
            public function get_my_salary_requests($table_name, $employee_id, $emp_status, $value){
                $this->load->model('database/database_connector');

                $session_id = $this->session->userdata('employee_id');
                $this->db->join('employees', 'employees.emp_id = '.$table_name.'.emp_id');
                $query = $this->database_connector->get_my_salary_requests($table_name, $employee_id, $session_id, $emp_status, $value);
                return $query;
            }

            // Cancel salary requests from here
            public function cancel_salary_requests($table_name, $employee_id){
                $this->load->model('database/database_connector');

                $cancel_id = $this->session->userdata('employee_id');
                $this->database_connector->cancel_salary_requests($table_name, $employee_id, $cancel_id);
                return true;
            }
      }