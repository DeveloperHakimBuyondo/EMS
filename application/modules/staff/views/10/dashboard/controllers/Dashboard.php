<?php

      class Dashboard extends Emp{
            public function __construct(){
                parent:: __construct();
            }

            public function index(){
                $data['title'] = "Dashboard";
                $this->load->model('dashboard_mdl');
                $data['dashboard_employees_count'] = $this->dashboard_mdl->get_dashboard_data('employees')->num_rows();
                $data['count_all_active_employees'] = $this->dashboard_mdl->get_data_by_where('employees', 'emp_status', 1)->num_rows();

                
                $data['count_running_projects'] = $this->dashboard_mdl->get_data_by_where('projects', 'project_status', 1)->num_rows();
                $data['count_finished_projects'] = $this->dashboard_mdl->get_data_by_where('projects', 'project_status', 2)->num_rows();
                $data['count_coming_projects'] = $this->dashboard_mdl->get_data_by_where('projects', 'project_status', 0)->num_rows();

                $data['count_pending_leaves'] = $this->dashboard_mdl->get_data_by_where('leaves', 'leave_status', 0)->num_rows();

                $data['dashboard_departments_count'] = $this->dashboard_mdl->get_dashboard_data('departments')->num_rows();

                $this->load->view('templates/header', $data);
                $this->load->view('dashboard', $data);
                $this->load->view('templates/footer');
            }
      }