<?php

      class Dashboard extends Emp{
            public function __construct(){
                parent:: __construct();
            }

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

                    $data['title'] = "Dashboard";
                    $this->load->model('dashboard_mdl');
                    $data['dashboard_employees_count'] = $this->dashboard_mdl->get_dashboard_data('employees')->num_rows();
                    $data['count_all_active_employees'] = $this->dashboard_mdl->get_data_by_id('employees', 'dep_id')->num_rows();
                    $data['dashboard_departments_count'] = $this->dashboard_mdl->get_dashboard_data('departments')->num_rows();
                    $data['count_running_projects'] = $this->dashboard_mdl->get_data_by_id_activity('projects', 'project_status', 'dep_id', 1)->num_rows();
                    $data['count_coming_projects'] = $this->dashboard_mdl->get_data_by_id_activity('projects', 'project_status', 'dep_id', 0)->num_rows();
                    $data['count_pending_leaves'] = $this->dashboard_mdl->get_data_by_id_activity('leaves', 'leave_status', 'dep_id', 0)->num_rows();
                    $data['count_aproved_loans'] = $this->dashboard_mdl->get_data_by_id_activity('loans', 'loan_status', 'dep_id', 1)->num_rows();
                        
                
                    $this->load->view('staff_templates/header', $data);
                    $this->load->view('dashboard', $data);
                    $this->load->view('staff_templates/footer');

                }     

            }
      }