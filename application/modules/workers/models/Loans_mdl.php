
<?php

      class Loans_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Load all loans data for me from here
            public function get_all_loans_data_for_me($table_name, $status, $value, $emp_id){
                $this->load->model('database/database_connector');
                
                $session_id = $this->session->userdata('emp_id');
                $this->db->join('employees', 'employees.emp_id = loans.emp_id');
                $query = $this->database_connector->get_all_loans_data_for_me($table_name, $status, $value, $emp_id, $session_id);
                return $query;
            }

            // Call my name from employees list
            public function get_my_name_from_employee_list($table_name){
                $this->load->model('database/database_connector');

                $query = $this->database_connector->get_my_name_from_employee_list($table_name);
                return $query;
            }

            // Pay loans from here
            public function request_loan_for_me($table_name){
                $this->load->model('database/database_connector');

                $currency = $this->input->post('currency');

                if($currency == 'ugx'){

                    $data = array(
                        'reason' => $this->input->post('reason'),
                        'pay_from' => $this->input->post('pay_from'),
                        'loan_amount' => $this->input->post('loan_amount'),
                        'loan_status' => 0,
                        'loan_balance' => 0,
                        'emp_id' => $this->session->userdata('emp_id'),
                        'dep_id' => $this->session->userdata('dep_id'),
                        'user_access' => 2
                    );
    
                    $this->database_connector->request_loan_for_me($table_name, $data);
                    return true;

                }else{

                    $data = array(
                        'reason' => $this->input->post('reason'),
                        'pay_from' => $this->input->post('pay_from'),
                        'dollar_loan_amount' => $this->input->post('loan_amount'),
                        'loan_status' => 0,
                        'dollar_loan_balance' => 0,
                        'emp_id' => $this->session->userdata('emp_id'),
                        'dep_id' => $this->session->userdata('dep_id'),
                        'user_access' => 2
                    );
    
                    $this->database_connector->request_loan_for_me($table_name, $data);
                    return true;
                }



            }

            // Get all loans data for me
            public function get_history_loans_data_for_me($table_name, $status, $value, $emp_id){
                $this->load->model('database/database_connector');

                    
                    $session_id = $this->session->userdata('emp_id');
                    $this->db->join('employees', 'employees.emp_id = loans.emp_id');
                    $query = $this->database_connector->get_history_loans_data_for_me($table_name, $status, $value, $emp_id, $session_id);
                    return $query;
                    
            }

                // Canceling loan requests from here
                public function cancel_loan_request($table_name, $leave_id, $cancel_id){
                    $this->load->model('database/database_connector');
                    
                    $this->database_connector->canceling_requests_from_me($table_name, $leave_id, $cancel_id);
                    return true;
                }
      }