<?php

      class Salary extends Emp{
        // Construct
        public function __construct(){
            parent:: __construct();
        }

        // See all Salary Info from here
        public function index(){
            $data['title'] = "SALARY MANAGEMENT";
            $this->load->model('salary_mdl');
            $data['manage_salary'] = $this->salary_mdl->manage_salary('employees', 'emp_status', 1);
            $data['salary'] = $this->salary_mdl->get_salary_data('employees', 'emp_id');

            $this->load->view('templates/header', $data);
            $this->load->view('salary', $data);
            $this->load->view('templates/footer');
        }


        // Updating Employee Info here
        public function update_salary($emp_image){
          $this->load->model('salary_mdl');
          // $this->employees_mdl->update_employee_data();

          $config['upload_path'] = "./assets/assets/images/employee_images/uploads/";
          $config['allowed_types'] = "gif|jpg|png";
          $config['max_size'] = "5000";
          $config['max_width'] = "1200";
          $config['max_height'] = "1200";

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    $image = $emp_image;
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $image = $_FILES['userfile']['name'];
                }
                $this->salary_mdl->update_salary('employees', 'emp_id', $image);


            // Set Flash Message
            $this->session->set_flashdata('salary_update', 'Employee salary was Successfully updated...');
            redirect('employees');
        }


      }