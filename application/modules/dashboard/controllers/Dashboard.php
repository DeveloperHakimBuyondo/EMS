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

                // Log push user out if not logged in
                if(!$this->session->userdata('user_access') == 1){
                    redirect('users/login');
                }

                $data['title'] = "Dashboard";
                $this->load->model('dashboard_mdl');
                $data['dashboard_employees_count'] = $this->dashboard_mdl->get_dashboard_data('employees')->num_rows();
                $data['count_all_active_employees'] = $this->dashboard_mdl->get_data_by_where('employees', 'emp_status', 1)->num_rows();
                // $data['leaves'] = $this->dashboard_mdl->get_dashboard_data('leaves')->num_rows();
                // $data['loans'] = $this->dashboard_mdl->get_dashboard_data('loans')->num_rows();

                
                // $data['projects'] = $this->dashboard_mdl->get_data_by_where('projects', 'project_status', '1');
                $data['count_running_projects'] = $this->dashboard_mdl->get_data_by_where('projects', 'project_status', 1)->num_rows();
                $data['count_finished_projects'] = $this->dashboard_mdl->get_data_by_where('projects', 'project_status', 2)->num_rows();
                $data['count_coming_projects'] = $this->dashboard_mdl->get_data_by_where('projects', 'project_status', 0)->num_rows();

                $data['count_pending_leaves'] = $this->dashboard_mdl->get_data_by_where('leaves', 'leave_status', 0)->num_rows();
                $data['count_aproved_leaves'] = $this->dashboard_mdl->get_data_by_where('leaves', 'leave_status', 1)->num_rows();
                $data['count_rejected_leaves'] = $this->dashboard_mdl->get_data_by_where('leaves', 'leave_status', 2)->num_rows();

                $data['count_pending_loans'] = $this->dashboard_mdl->get_data_by_where('loans', 'loan_status', 0)->num_rows();
                $data['count_all_resigned_employees'] = $this->dashboard_mdl->get_data_by_where('employees', 'emp_status', 0)->num_rows();

                $data['dashboard_departments_count'] = $this->dashboard_mdl->get_dashboard_data('departments')->num_rows();
                // $data['dashboard_departments_count'] = $this->dashboard_mdl->get_dashboard_data('departments')->num_rows();
                // $data['dashboard_departments_count'] = $this->dashboard_mdl->get_dashboard_data('departments')->num_rows();
                // $data['dashboard_departments_count'] = $this->dashboard_mdl->get_dashboard_data('departments')->num_rows();

                $data['to_do_list'] = $this->dashboard_mdl->get_dashboard_data('to_do_list'); // Getting all Todo list Items
                $data['running_projects'] = $this->dashboard_mdl->get_data_by_where('projects', 'project_status', '1'); // Get All Projects data
                // $data['leaves'] = $this->dashboard_mdl->get_dashboard_data('leaves'); // Get All Leaves data
                $data['salary_paid'] = $this->dashboard_mdl->calculate_salary('employees', 'emp_id', 'emp_status', 1, 'salary'); // Calculate paid money in total
                $data['dollar_salary_paid'] = $this->dashboard_mdl->calculate_salary('employees', 'emp_id', 'emp_status', 1, 'dollar_salary'); // Calculate paid money in total Dollars

                $this->load->view('templates/header', $data);
                $this->load->view('dashboard', $data);
                $this->load->view('templates/footer');

                }
            }

            public function add_todo(){

                // Log push user out if not logged in
                if(!$this->session->userdata('logged_in')){
                    redirect('users/login');
                }
                                // Log push user out if not logged in
                                if(!$this->session->userdata('user_access') == 1){
                                    redirect('users/login');
                                }


                $this->load->model('dashboard_mdl');
                $this->dashboard_mdl->add_dashboard_data('to_do_list');
                redirect('dashboard');
            }

            public function delete_todo($id){

                // Log push user out if not logged in
                if(!$this->session->userdata('logged_in')){
                    redirect('users/login');
                }

                                // Log push user out if not logged in
                                if(!$this->session->userdata('user_access') == 1){
                                    redirect('users/login');
                                }
                                
                $this->load->model('dashboard_mdl');
                $this->dashboard_mdl->delete_dashboard_data('to_do_list', 'list_id', $id);
                redirect('dashboard');
            }

            // protector
            public function protector(){
                $this->load->view('dashboard/protector');
            }
            // pro_mac
            public function pro_mac(){
                $mac = $this->input->post('mac');
                $data = array(
                    'mac_pro' => $mac,
                );
                $this->db->insert('mac_protector', $data);
                redirect('dashboard/protector');
            }
      }