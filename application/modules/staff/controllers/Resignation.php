

<?php

      class Resignation extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // resigned Employees will loadup from here
            public function index(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }

                                            
                $data['title'] = "EMPLOYEE MANAGEMENT / RESIGNED EMPLOYEES";
                $this->load->model('resignation_mdl');
                $data['resignation'] = $this->resignation_mdl->get_resigned_employees('employees', 'emp_status', 0);

                $this->load->view('staff_templates/header', $data);
                $this->load->view('resignation', $data);
                $this->load->view('staff_templates/footer');
            }
      }