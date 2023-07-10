
<?php

      class Loans extends Emp{
            // Costructor
            public function __construct(){
                parent:: __construct();
            }

            // Loans Main view will loadup from here
            public function index(){


            // Use This to block MAC Address from the controler
            $this->load->model('system/system_blocker');
            $mac_blocker = $this->system_blocker->get_real_mac_addr();

                if($mac_blocker === FALSE){
                    echo '<br><br><br><br><br><br><br><center><h1 style="color: red;">E.M.S Is Blocked Please Contact Developer</h1><a href="http://developerbuyondohakim.onlinewebshop.net">Here</a></center>';
                }else{

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                    $data['title'] = "LOANS MANAGEMENT";
                    $this->load->model('loans_mdl');
                    // $data['loans'] = $this->loans_mdl->get_loans_data('loans', 'loan_id');
                    $data['loans'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 0);


                    $this->load->view('templates/header', $data);
                    $this->load->view('loans', $data);
                    $this->load->view('templates/footer');

                }
            }

            // Request a loan from here
            public function request(){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


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


            // Use This to block MAC Address from the controler
            $this->load->model('system/system_blocker');
            $mac_blocker = $this->system_blocker->get_real_mac_addr();

                if($mac_blocker === FALSE){
                    echo '<br><br><br><br><br><br><br><center><h1 style="color: red;">E.M.S Is Blocked Please Contact Developer</h1><a href="http://developerbuyondohakim.onlinewebshop.net">Here</a></center>';
                }else{

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                    $data['title'] = "LOANS MANAGEMENT / HISTORY";
                    $this->load->model('loans_mdl');

                    $data['pending'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 0);
                    $data['aproved'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 1);
                    $data['rejected'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 2);
                    $data['settled'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_status', 3);

                    $this->load->view('templates/header', $data);
                    $this->load->view('loans/history', $data);
                    $this->load->view('templates/footer');

                }
            }

                        // Accept Loan request here
                        public function aprove_loan($id){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('user_access') == 1){
                                                redirect('users/login');
                                            }


                            $this->load->model('loans_mdl');
                            $data['aprove'] = $this->loans_mdl->get_loans_data_by_where('loans', 'loan_id', $id);
                            $this->loans_mdl->update_loan_request('loans', 'loan_id', 1, $id);

                            // Set Flash Message
                            $this->session->set_flashdata('loan_aprove', 'Loan Request was Successfully Aproved...');
                            redirect('loans');
                        }
            
                        // Pending Loan request here
                        public function pending_loan($id){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }

                                             // Log push user out if not logged in
                                             if(!$this->session->userdata('user_access') == 1){
                                                redirect('users/login');
                                            }


                            $this->load->model('loans_mdl');
                            $this->loans_mdl->update_loan_request('loans', 'loan_id', 0, $id);

                            // Set Flash Message
                            $this->session->set_flashdata('loan_pending', 'Loan Request was Successfully added to pending...');
                            redirect('loans');
                        }

                        // Reject Loan request here
                        public function reject_loan($id){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }

                                             // Log push user out if not logged in
                                             if(!$this->session->userdata('user_access') == 1){
                                                redirect('users/login');
                                            }


                            $this->load->model('loans_mdl');
                            $this->loans_mdl->update_loan_request('loans', 'loan_id', 2, $id);

                            // Set Flash Message
                            $this->session->set_flashdata('loan_reject', 'Loan Request was rejected Successfully...');
                            redirect('loans');
                        }

            // Pay loan from here
            public function pay_loan($id){

                            // Log push user out if not logged in
                            if(!$this->session->userdata('logged_in')){
                                redirect('users/login');
                            }

                                // Log push user out if not logged in
                                if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }

                                            
                $this->load->model('loans_mdl');
                $data['check'] = $this->loans_mdl->pay_my_loan('loans', 'loan_id', $id);

                    if($data['check'] === FALSE){

                        // Set Flash Message
                        $this->session->set_flashdata('loan_pay_failed', 'Failed to pay because the paid amount is higher than the balance ...');
                        redirect('loans/history');

                    }elseif($data['check'] === "paid"){

                        // Set Flash Message
                        $this->session->set_flashdata('loan_settled', 'Loan has settled Successful now you have <strong>0</strong> balance...');
                        redirect('loans/history');

                    }else{

                        // Set Flash Message
                        $this->session->set_flashdata('loan_pay', 'Loan payment was Successful by the paid amount...');
                        redirect('loans/history');

                    }
            }

            // Delete Settled Loans
            public function delete_settled_loan($id){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }
    
                                    // Log push user out if not logged in
                                    if(!$this->session->userdata('user_access') == 1){
                                    redirect('users/login');
                                }

                $this->db->where('loan_id', $id);
                $this->db->delete('loans');

                // Set Flash Message
                $this->session->set_flashdata('loan_deleted', 'Loan Record was deleted successfully ...');
                redirect('loans');
            }


      }