
<?php

      class Loans extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Load all loans data for worker from here
            public function index(){
                $data['title'] = "PENDING LOAN REQUESTS";
                $this->load->model('loans_mdl');
                $data['loans'] = $this->loans_mdl->get_all_loans_data_for_me('loans', 'loan_status', 0, 'loans.emp_id');

                $this->load->view('workers_templates/header', $data);
                $this->load->view('workers/loans', $data);
                $this->load->view('workers_templates/footer');
            }

                // Request a loan from here
                public function request(){
                    $data['title'] = "REQUEST A LOAN";
                    $this->load->model('loans_mdl');
                    $data['employees'] = $this->loans_mdl->get_my_name_from_employee_list('employees');

                        $this->form_validation->set_rules('reason', 'Reason', 'required');
                        $this->form_validation->set_rules('loan_amount', 'Loan Amount', 'required');

                            if($this->form_validation->run() === FALSE){

                                $this->load->view('workers_templates/header', $data);
                                $this->load->view('workers/loan_request', $data);
                                $this->load->view('workers_templates/footer');
                                
                            }else{
                                $this->loans_mdl->request_loan_for_me('loans');
                                redirect('workers/loans');
                            }

                }

                // Loans history is loaded from here
                public function history(){
                    $data['title'] = "Loans / History";
                    $this->load->model('loans_mdl');
                    $data['pending'] = $this->loans_mdl->get_history_loans_data_for_me('loans', 'loan_status', 0, 'loans.emp_id');
                    $data['aproved'] = $this->loans_mdl->get_history_loans_data_for_me('loans', 'loan_status', 1, 'loans.emp_id');
                    $data['rejected'] = $this->loans_mdl->get_history_loans_data_for_me('loans', 'loan_status', 2, 'loans.emp_id');

                    $this->load->view('workers_templates/header', $data);
                    $this->load->view('workers/loans_history', $data);
                    $this->load->view('workers_templates/footer');
                }

                // Canceling loan request from here
                public function cancel_loan($cancel_id){

                    // Log push user out if not logged in
                    if(!$this->session->userdata('worker_logged')){
                        redirect('users/worker_login');
                    }

                    $this->load->model('loans_mdl');
                    $this->loans_mdl->cancel_loan_request('loans','loan_id', $cancel_id);

                    $this->session->set_flashdata('loan_canceled', 'Loan Rquest was Canceled successfully...');
                    redirect('workers/loans');
                }
      }