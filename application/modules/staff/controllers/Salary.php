<?php

      class Salary extends Emp{
          // Construct
          public function __construct(){
              parent:: __construct();
          }

          // See all Salary Info from here
          public function index(){

                                        // Log push user out if not logged in
                                        if(!$this->session->userdata('logged_in')){
                                          redirect('users/login');
                                      }

                                      
              $data['title'] = "SALARY MANAGEMENT";
              $this->load->model('salary_mdl');
              $data['manage_salary'] = $this->salary_mdl->manage_salary('employees', 'emp_status', 1);
              $data['salary'] = $this->salary_mdl->get_salary_data('employees', 'emp_id');

              $this->load->view('staff_templates/header', $data);
              $this->load->view('salary/staff_salary', $data);
              $this->load->view('staff_templates/footer');
          }

          // Load Salary Requests from here
          public function salary_requests(){
            $data['title'] = "Salary Increment Requests";
            $this->load->model('salary_mdl');
            $data['requests'] = $this->salary_mdl->get_salary_requests_for_me('salary_increment_request');

            $this->load->view('staff_templates/header', $data);
            $this->load->view('salary/salary_requests', $data);
            $this->load->view('staff_templates/footer');

          }


          // Salary requests from here
          public function reject_request(){
            $this->load->model('salary_mdl');
            $this->salary_mdl->reject_request('salary_increment_request', 'employee_id');

            $this->session->set_flashdata('salary_rejected', 'Salary request was Rejected...');
            redirect('staff/salary/salary_requests');
          }


          // Salary requests from here
          public function agree(){
            $this->load->model('salary_mdl');
            $this->salary_mdl->agree('salary_increment_request', 'employee_id');

            $this->session->set_flashdata('salary_agreed', ' You Agreed with a request ...');
            redirect('staff/salary/salary_requests');
          }




      }