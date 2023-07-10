

<?php

      class Resignation extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // resigned Employees will loadup from here
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

                                            
                    $data['title'] = "EMPLOYEE MANAGEMENT / RESIGNED EMPLOYEES";
                    $this->load->model('resignation_mdl');
                    $data['resignation'] = $this->resignation_mdl->get_resigned_employees('employees', 'emp_status', 0);

                    $this->load->view('templates/header', $data);
                    $this->load->view('resignation', $data);
                    $this->load->view('templates/footer');

                }
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

            $this->load->model('resignation_mdl');
            $data['resignation'] = $this->resignation_mdl->search_employee_id('employees', 'employee_id', 'emp_status', 0);

            $this->load->view('templates/header', $data);
            $this->load->view('resignation', $data);
            $this->load->view('templates/footer');
        }
      }