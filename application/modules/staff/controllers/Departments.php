
<?php

      class Departments extends Emp{
            public function __construct(){
                parent:: __construct();
            }

            // Departments will show up from here
            public function index(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }

                                            
                $data['title'] = "MANAGE DEPARTMENTS";
                $this->load->model('departments_mdl');
                $data['departments'] = $this->departments_mdl->get_departments_data('departments');

                $this->load->view('staff_templates/header', $data);
                $this->load->view('departments', $data);
                $this->load->view('staff_templates/footer');
            }
      }