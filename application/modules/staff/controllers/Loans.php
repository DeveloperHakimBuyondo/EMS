
<?php

      class Loans extends Emp{
            // Costructor
            public function __construct(){
                parent:: __construct();
            }

            // Loans Main view will loadup from here
            public function index(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }


                $data['title'] = "LOANS MANAGEMENT";
                $this->load->model('loans_mdl');
                // $data['loans'] = $this->loans_mdl->get_loans_data('loans', 'loan_id');
                $data['loans'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 0);


                $this->load->view('staff_templates/header', $data);
                $this->load->view('loans/staff_loans', $data);
                $this->load->view('staff_templates/footer');
            }

            // Request a loan from here
            public function request(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }


                $this->load->model('loans_mdl');
                $data['title'] = "LOANS MANAGEMENT / REQUEST";
                $data['employees'] = $this->loans_mdl->get_employee_data_by_where('employees', 'emp_status', 1);

                    // Form Validations
                    $this->form_validation->set_rules('reason', 'Loan Reason', 'required');
                    $this->form_validation->set_rules('loan_amount', 'Loan Amount', 'required');

                        if($this->form_validation->run() === FALSE){

                            $this->load->view('staff_templates/header', $data);
                            $this->load->view('loans/loans_request', $data);
                            $this->load->view('staff_templates/footer');

                        }else{
                            $this->loans_mdl->request_loan('loans');

                            // Set Flash Message
                            $this->session->set_flashdata('loan_request', 'Loan Request was sent Successfully...');
                            redirect('staff/loans');
                        }

            }

            //Loan History
            public function history(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }


                $data['title'] = "LOANS MANAGEMENT / HISTORY";
                $this->load->model('loans_mdl');

                $data['pending'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 0);
                $data['aproved'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 1);
                $data['rejected'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 2);
                $data['settled'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 3);

                $this->load->view('staff_templates/header', $data);
                $this->load->view('loans/loans_history', $data);
                $this->load->view('staff_templates/footer');
            }

            // Pay loan from here
            public function pay_loan($id){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }

                                            
                $this->load->model('loans_mdl');
                $data['check'] = $this->loans_mdl->pay_my_loan('loans', 'loan_id', $id);

                if($data['check'] === FALSE){

                    // Set Flash Message
                    $this->session->set_flashdata('loan_pay_failed', 'Failed to pay because the paid amount is higher than the balance ...');
                    redirect('staff/loans/history');

                }elseif($data['check'] === "paid"){

                    // Set Flash Message
                    $this->session->set_flashdata('loan_settled', 'Loan has settled Successful now you have <strong>0</strong> balance...');
                    redirect('staff/loans/history');

                }else{

                    // Set Flash Message
                    $this->session->set_flashdata('loan_pay', 'Loan payment was Successful by the paid amount...');
                    redirect('staff/loans/history');

                }


            }


      }