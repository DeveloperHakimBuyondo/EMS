
<?php

      class Employees extends Emp{
            public function __construct(){
                parent:: __construct();
            }

            // Call all Employees here
            public function index(){
                $data['title'] = "Manage Employees";
                $this->load->model('employees_mdl');
                $data['get_employees_all_data'] = $this->employees_mdl->get_employees_data_by_where('employees', 'emp_status', 1);

                $this->load->view('templates/header', $data);
                $this->load->view('employees', $data);
                $this->load->view('templates/footer');
            }

            // Get all Employees mixed active and not active
            public function all_employees(){
                $data['title'] = "Manage Employees / MIXED";
                $this->load->model('employees_mdl');
                $data['get_mixed_employees'] = $this->employees_mdl->get_employees_data('employees');

                $this->load->view('templates/header', $data);
                $this->load->view('employees/all', $data);
                $this->load->view('templates/footer');
            }

            // View Employee Record
            public function view($id = NULL){
                // $data['title'] = "Manage Employees";
                $this->load->model('employees_mdl');
                $data['employee'] = $this->employees_mdl->get_employees_data('employees', $id);
                $data['cv'] = $this->employees_mdl->get_loans_and_cv('cv_management', $id);
                $data['ln'] = $this->employees_mdl->get_loans_and_cv('loans', $id);

                    if(empty($data['employee'])){
                        die('Can not view Information');
                    }else{
                        $data['title'] = $data['employee']['emp_name'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('employees/view', $data);
                        $this->load->view('templates/footer');
                    }
            }
      }