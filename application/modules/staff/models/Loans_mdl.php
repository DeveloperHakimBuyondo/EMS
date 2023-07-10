
<?php

      class Loans_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Loadup Loans Data from here
            public function get_loans_data($table_name, $table_id = FALSE, $id = FALSE){
                $this->load->model('database/database_connector');
                if($id === FALSE){

                    if($table_name === 'loans'){

                        $this->db->join('employees', 'employees.emp_id = loans.emp_id');
                        $query = $this->database_connector->call_all_data($table_name);
                        return $query;

                    }else{

                        $query = $this->database_connector->call_all_data($table_name);
                        return $query;
                    }

                }
                    $query = $this->db->get_where($table_name, array($table_id => $id));
                    return $query->row_array();
            }


                        // Get loans by where clouse
                        public function get_loans_data_by_where($table_name, $status, $value, $id = FALSE){
                            $this->load->model('database/database_connector');

                            if($id === FALSE){
                                
                                $this->db->join('employees', 'employees.emp_id = loans.emp_id');
                                $query = $this->database_connector->call_all_data_by_where($table_name, $status, $value);
                                return $query;
                            }
                                $query = $this->db->where($table_name, array($table_id => $id));
                                return $query->row_array();

                        }

                                                // Get Employee in loans by where clouse
                                                public function get_employee_data_by_where($table_name, $status, $value, $id = FALSE){
                                                    $this->load->model('database/database_connector');
                        
                                                    if($id === FALSE){
                                                        $query = $this->database_connector->call_all_data_by_where($table_name, $status, $value);
                                                        return $query;
                                                    }
                                                        $query = $this->db->where($table_name, array($table_id => $id));
                                                        return $query->row_array();
                        
                                                }

            // Request a loan from here
            public function request_loan($table_name){

                $currency = $this->input->post('currency');
                if($currency === 'ugx'){

                    $data = array(
                        'reason' => $this->input->post('reason'),
                        'pay_from' => $this->input->post('pay_from'),
                        'loan_amount' => $this->input->post('loan_amount'),
                        'emp_id' => $this->input->post('emp_id'),
                        'loan_balance' => 0,
                        'loan_status' => 0,
                        'dollar_loan_balance' => 0,
                        'dollar_loan_amount' => 0,
                        'dollar_loan_payments' => 0,
                        'dep_id' => $this->session->userdata('department_id'),
                        'user_access' => $this->session->userdata('user_access')
                    );
    
                    $this->load->model('database/database_connector');
                    $this->database_connector->add_data($table_name, $data);
                    return true;
                }else{

                    $data = array(
                        'reason' => $this->input->post('reason'),
                        'pay_from' => $this->input->post('pay_from'),
                        'dollar_loan_amount' => $this->input->post('loan_amount'),
                        'emp_id' => $this->input->post('emp_id'),
                        'loan_balance' => 0,
                        'dollar_loan_balance' => 0,
                        'dollar_loan_payments' => 0,
                        'loan_status' => 0,
                        'dep_id' => $this->session->userdata('department_id'),
                        'user_access' => $this->session->userdata('user_access')
                    );
    
                    $this->load->model('database/database_connector');
                    $this->database_connector->add_data($table_name, $data);
                    return true;
                }

            }

            // Aprove Loan request either accept or reject
            public function update_loan_request($table_name, $update_id, $value, $id){
                $this->load->model('database/database_connector');

                    if($value == 1){

                        $data = array(
                            'loan_status' => $value,
                            'loan_balance' => $this->input->post('loan_amount'),
                            'user_access' => $this->session->userdata('user_access')
                        );

                        $this->database_connector->update_data($table_name, $update_id, $id, $data);
                        return true;

                    }else{

                        $data = array(
                            'loan_status' => $value,
                            'loan_balance' => 0,
                            'user_access' => $this->session->userdata('user_access')
                        );
                        $this->database_connector->update_data($table_name, $update_id, $id, $data);
                        return true;
                    }

            }

            // pay loans from here
            public function pay_my_loan($table_name, $pay_id, $id){
                $this->load->model('database/database_connector');

                    $query['payments'] = $this->database_connector->calculate_payments($table_name, $pay_id, $id)->row_array();

                    $payments = $query['payments']['loan_payments'];
                    $dollar_payments = $query['payments']['dollar_loan_payments'];

                    $balance = $this->input->post('balance');
                    $pay = $this->input->post('pay');

                    $currency = $this->input->post('currency');

                    if($pay > $balance){
                        return false;

                    }elseif($pay == $balance){

                        if($currency === 'ugx'){
                            $data = array(
                                'loan_status' => 3,
                                'loan_balance' => $balance - $pay,
                                'loan_payments' => $payments + $pay
                            );
        
                            $this->database_connector->pay($table_name, $pay_id, $id, $data);
                            // $this->db->where($pay_id, $id);
                            // $this->db->delete($table_name);
                            return "paid";
                        }else{

                            $data = array(
                                'loan_status' => 3,
                                'dollar_loan_balance' => $balance - $pay,
                                'dollar_loan_payments' => $dollar_payments + $pay
                            );
        
                            $this->database_connector->pay($table_name, $pay_id, $id, $data);
                            // $this->db->where($pay_id, $id);
                            // $this->db->delete($table_name);
                            return "paid";
                        }


                    }else{

                        if($currency === 'ugx'){
                            $data = array(
                                'loan_balance' => $balance - $pay,
                                'loan_payments' => $payments + $pay
                            );
        
                            $this->database_connector->pay($table_name, $pay_id, $id, $data);
                            return true;
                        }else{

                            $data = array(
                                'dollar_loan_balance' => $balance - $pay,
                                'dollar_loan_payments' => $dollar_payments + $pay
                            );
        
                            $this->database_connector->pay($table_name, $pay_id, $id, $data);
                            return true;
                        }

                    }
            }
      }