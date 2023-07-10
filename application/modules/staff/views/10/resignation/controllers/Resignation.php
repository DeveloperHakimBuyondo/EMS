

<?php

      class Resignation extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // resigned Employees will loadup from here
            public function index(){
                $data['title'] = "EMPLOYEE MANAGEMENT / RESIGNED EMPLOYEES";
                $this->load->model('resignation_mdl');
                $data['resignation'] = $this->resignation_mdl->get_resigned_employees('employees', 'emp_status', 0);

                $this->load->view('templates/header', $data);
                $this->load->view('resignation', $data);
                $this->load->view('templates/footer');
            }
      }