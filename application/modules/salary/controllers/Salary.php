<?php

      class Salary extends Emp{
        // Construct
        public function __construct(){
            parent:: __construct();
        }

        // See all Salary Info from here
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


                $data['title'] = "SALARY MANAGEMENT";
                $this->load->model('salary_mdl');
                $data['manage_salary'] = $this->salary_mdl->manage_salary('employees', 'emp_status', 1);
                $data['salary'] = $this->salary_mdl->get_salary_data('employees', 'emp_id');

                $this->load->view('templates/header', $data);
                $this->load->view('salary', $data);
                $this->load->view('templates/footer');

            }
        }


        // Updating Employee Info here
        public function update_salary($emp_image){

                                        // Log push user out if not logged in
                                        if(!$this->session->userdata('logged_in')){
                                            redirect('users/login');
                                        }

                                         // Log push user out if not logged in
                                         if(!$this->session->userdata('user_access') == 1){
                                            redirect('users/login');
                                        }

                                        
          $this->load->model('salary_mdl');
          // $this->employees_mdl->update_employee_data();

          $config['upload_path'] = "./assets/assets/images/employee_images/uploads/";
          $config['allowed_types'] = "gif|jpg|png";
          $config['max_size'] = "5000";
          $config['max_width'] = "1200";
          $config['max_height'] = "1200";

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    $image = $emp_image;
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $image = $_FILES['userfile']['name'];
                }
                $this->salary_mdl->update_salary('employees', 'emp_id', $image);


            // Set Flash Message
            $this->session->set_flashdata('salary_update', 'Employee salary was Successfully updated...');
            redirect('employees');
        }


                // Search employees by employee id from here
                public function search(){

                            // Log push user out if not logged in
                            if(!$this->session->userdata('logged_in')){
                                redirect('users/login');
                            }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }

                $data['title'] = "Manage Employees";

                $this->load->model('salary_mdl');
                $data['manage_salary'] = $this->salary_mdl->search_employee_id('employees', 'employee_id', 'emp_status', 1);

                $this->load->view('templates/header', $data);
                $this->load->view('salary', $data);
                $this->load->view('templates/footer');
            }


            // Salary requests from here
            public function salary_requests(){
                $data['title'] = "Salary Requests";
                $this->load->model('salary_mdl');
                $data['requests'] = $this->salary_mdl->get_employees_salary_requests('salary_increment_request');

                $this->load->view('templates/header', $data);
                $this->load->view('salary/salary_requests', $data);
                $this->load->view('templates/footer');
            }

                        // Salary requests from here
                        public function reject(){
                            $this->load->model('salary_mdl');
                            $this->salary_mdl->reject_request('salary_increment_request', 'employee_id');
            
                            $this->session->set_flashdata('salary_rejected', 'Employee salary request was Rejected...');
                            redirect('employees');
                        }


      }