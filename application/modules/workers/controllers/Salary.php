
<?php

      class Salary extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Load my Salary from here
            public function index(){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('worker_logged')){
                                    redirect('users/worker_login');
                                }

                $data['title'] = "My Salary Report";
                $this->load->model('salary_mdl');
                $data['salary'] = $this->salary_mdl->get_all_salary_info('employees', 'emp_id');

                $this->load->view('workers_templates/header', $data);
                $this->load->view('salary', $data);
                $this->load->view('workers_templates/footer');
            }

            // Request Salary fro here
            public function request(){

                                        // Log push user out if not logged in
                                        if(!$this->session->userdata('worker_logged')){
                                            redirect('users/worker_login');
                                        }

                $data['title'] = "Request Salary Increment";
                $this->load->model('salary_mdl');
                $data['salary'] = $this->salary_mdl->get_all_salary_info('employees', 'emp_id')->row_array();
                
                    $this->form_validation->set_rules('employee_id', 'Employee ID', 'required');
                    $this->form_validation->set_rules('message', 'Message', 'required');

                    if($this->form_validation->run() === FALSE){
                        
                        $this->load->view('workers_templates/header', $data);
                        $this->load->view('workers/request', $data);
                        $this->load->view('workers_templates/footer');

                    }else{
                        
                        $session_id = $this->session->userdata('employee_id');
                        $emp_id = $this->input->post('employee_id');

                            if($emp_id != $session_id){

                                $this->session->set_flashdata('salary_request_failed', 'Failed - Please check your ID and try again...');
                                redirect('workers/salary/request');

                            }else{

                                $employee = $this->session->userdata('employee_id');
                                $catch_error = $this->salary_mdl->request_salary('salary_increment_request', $employee);

                                $this->session->set_flashdata('salary_request_success', 'Salary Increment Rquest was sent successfully...');
                                redirect('workers/dashboard');

                            }
                        
                    }

            }

            // Load My salary requests here
            public function my_requests(){

                                                // Log push user out if not logged in
                                                if(!$this->session->userdata('worker_logged')){
                                                    redirect('users/worker_login');
                                                }


                $data['title'] = "My (Last Requests)";
                $this->load->model('salary_mdl');
                $data['my_requests'] = $this->salary_mdl->get_my_salary_requests('salary_increment_request', 'salary_increment_request.employee_id', 'emp_status', 1);

                $this->load->view('workers_templates/header', $data);
                $this->load->view('workers/my_requests', $data);
                $this->load->view('workers_templates/footer');
            }

                        // Load My salary requests here
                        public function cancel_salary_requests(){

                                                    // Log push user out if not logged in
                                                    if(!$this->session->userdata('worker_logged')){
                                                        redirect('users/worker_login');
                                                    }


                            $this->load->model('salary_mdl');
                            $this->salary_mdl->cancel_salary_requests('salary_increment_request', 'employee_id');

                            $this->session->set_flashdata('cancel_salary_requests', 'Salary Request Canceled ...');
                            redirect('workers/salary/my_requests');
                        }
      }