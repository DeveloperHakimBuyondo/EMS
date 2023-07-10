
<?php

      class Loans extends Emp{
            // Costructor
            public function __construct(){
                parent:: __construct();
            }

            // Loans Main view will loadup from here
            public function index(){
                $data['title'] = "LOANS MANAGEMENT";
                $this->load->model('loans_mdl');
                // $data['loans'] = $this->loans_mdl->get_loans_data('loans', 'loan_id');
                $data['loans'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 0);


                $this->load->view('templates/header', $data);
                $this->load->view('loans', $data);
                $this->load->view('templates/footer');
            }

            // Request a loan from here
            public function request(){
                $this->load->model('loans_mdl');
                $data['title'] = "LOANS MANAGEMENT / REQUEST";
                $data['employees'] = $this->loans_mdl->get_employee_data_by_where('employees', 'emp_status', 1);

                    // Form Validations
                    $this->form_validation->set_rules('reason', 'Loan Reason', 'required');
                    $this->form_validation->set_rules('loan_amount', 'Loan Amount', 'required');

                        if($this->form_validation->run() === FALSE){

                            $this->load->view('templates/header', $data);
                            $this->load->view('loans/request', $data);
                            $this->load->view('templates/footer');

                        }else{
                            $this->loans_mdl->request_loan('loans');

                            // Set Flash Message
                            $this->session->set_flashdata('loan_request', 'Loan Request was sent Successfully...');
                            redirect('loans');
                        }

            }

            //Loan History
            public function history(){
                $data['title'] = "LOANS MANAGEMENT / HISTORY";
                $this->load->model('loans_mdl');

                $data['pending'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 0);
                $data['aproved'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 1);
                $data['rejected'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 2);

                $this->load->view('templates/header', $data);
                $this->load->view('loans/history', $data);
                $this->load->view('templates/footer');
            }

            // Pay loan from here
            public function pay_loan($id){
                $this->load->model('loans_mdl');
                $this->loans_mdl->pay_my_loan('loans', 'loan_id', $id);

                // Set Flash Message
                $this->session->set_flashdata('loan_pay', 'Loan payment was Successful by the paid amount...');
                redirect('loans/history');
            }


      }