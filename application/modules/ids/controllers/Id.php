
<?php

      class Id extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Load latest employee id here
            public function index(){

                                        // Log push user out if not logged in
                                        if(!$this->session->userdata('logged_in')){
                                            redirect('users/login');
                                        }
                
                                        // Log push user out if not logged in
                                        if(!$this->session->userdata('user_access') == 1){
                                            redirect('users/login');
                                        }

                $data['title'] = "employee ID";
                $this->load->model('id_mdl');
                $data['ids'] = $this->id_mdl->get_employees_login_id('employees', 'emp_id');

                $this->load->view('templates/header', $data);
                $this->load->view('id', $data);
                $this->load->view('templates/footer');
            }

            
            // Updating Employee Info here
            public function update_id($emp_image){

                        // Log push user out if not logged in
                        if(!$this->session->userdata('logged_in')){
                            redirect('users/login');
                        }

                        // Log push user out if not logged in
                        if(!$this->session->userdata('user_access') == 1){
                            redirect('users/login');
                        }

            
                $this->load->model('id_mdl');
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
                $this->id_mdl->update_id('employees', 'emp_id', $image);


                // Set Flash Message
                $this->session->set_flashdata('id_update', 'Employee ID was Successfully updated...');
                redirect('employees');
                
            }


      }