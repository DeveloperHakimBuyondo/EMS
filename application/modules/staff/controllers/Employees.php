
<?php

      class Employees extends Emp{
            public function __construct(){
                parent:: __construct();
            }

            // Call all Employees here
            public function index(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }


                $data['title'] = "Manage Employees";
                $this->load->model('employees_mdl');
                $data['get_employees_all_data'] = $this->employees_mdl->get_employees_data_by_where('employees', 'emp_status', 1);

                $this->load->view('staff_templates/header', $data);
                $this->load->view('employees/employees', $data);
                $this->load->view('staff_templates/footer');
            }

            // Get all Employees mixed active and not active
            public function all_employees(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }


                $data['title'] = "Manage Employees / MIXED";
                $this->load->model('employees_mdl');
                $data['get_mixed_employees'] = $this->employees_mdl->get_employees_data('employees');

                $this->load->view('staff_templates/header', $data);
                $this->load->view('employees/all', $data);
                $this->load->view('staff_templates/footer');
            }

            // View Employee Record
            public function view($id = NULL){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }

                                            
                // $data['title'] = "Manage Employees";
                $this->load->model('employees_mdl');
                $data['employee'] = $this->employees_mdl->get_employees_data('employees', $id);
                $data['cv'] = $this->employees_mdl->get_loans_and_cv('cv_management', $id);
                $data['ln'] = $this->employees_mdl->get_loans_and_cv('loans', $id);

                    if(empty($data['employee'])){
                        die('Can not view Information');
                    }else{
                        $data['title'] = $data['employee']['emp_name'];

                        $this->load->view('staff_templates/header', $data);
                        $this->load->view('employees/view', $data);
                        $this->load->view('staff_templates/footer');
                    }
            }

            // Search employees by employee id from here
            public function staff_search(){

                    // Log push user out if not logged in
                    if(!$this->session->userdata('logged_in')){
                        redirect('users/login');
                    }

                    //     // Log push user out if not logged in
                    // if(!$this->session->userdata('user_access') == 1){
                    //     redirect('users/login');
                    // }

                $data['title'] = "Manage Employees";

                $this->load->model('employees_mdl');
                $data['get_employees_all_data'] = $this->employees_mdl->search_employee_id('employees', 'employee_id', 'emp_status', 1);

                $this->load->view('staff_templates/header', $data);
                $this->load->view('employees/employees', $data);
                $this->load->view('staff_templates/footer');
            }

      }