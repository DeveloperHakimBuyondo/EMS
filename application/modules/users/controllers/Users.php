

<?php

      class Users extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Loding Registration view here
            public function register(){
                $data['title'] = "EMS";
                $this->load->model('users_mdl');
                $data['get_departments'] = $this->users_mdl->get_all_data('departments');

                    // Form validations
                    // $this->form_validation->set_rules('department_id', 'Department Name', 'required');
                    // $this->form_validation->set_rules('register_as', 'Access Position', 'required');
                    $this->form_validation->set_rules('username', 'Username', 'required');
                    $this->form_validation->set_rules('password', 'Password', 'required');
                    $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

                        if($this->form_validation->run() === FALSE){
                            // $this->load->view('templates/header', $data);
                            $this->load->view('register', $data);
                            // $this->load->view('templates/footer');
                        } else {

                            // Encrypt the password
                            $enc_password = md5($this->input->post('password'));
                            
                            $chech = $this->users_mdl->register_user('users', $enc_password);

                                if($chech === FALSE){

                                // Set Flash Message
                                $this->session->set_flashdata('user_regist_failed', 'Failed HR has an access already ...');
                                redirect('users/login');

                                }elseif($chech === "name_failed"){

                                // Set Flash Message
                                $this->session->set_flashdata('username_failed', 'Failed: Username already exist please choose the another one ...');
                                redirect('users/login');

                                }else{

                                // Set Flash Message
                                $this->session->set_flashdata('user_registered', 'User registered you can now login...');
                                redirect('users/login');

                                }
                            

                        }


            }

            // User Login
            public function login(){

                $data['title'] = "EMS";
                $this->load->model('users_mdl');

                $this->form_validation->set_rules('username', "Username", 'required');
                $this->form_validation->set_rules('password', "Password", 'required');



                if($this->form_validation->run() === FALSE){

                    // $this->load->view('templates/user_templates/users_header');
                    $this->load->view('users/login', $data);
                    // $this->load->view('templates/user_templates/users_footer');

                }else{
                    
                    $un = $this->input->post('username');
                    $pw = md5($this->input->post('password'));

                    $check_login=$this->users_mdl->logindata($un,$pw);
                    if($check_login<>'')
                    {
                        
                        
                            if($check_login[0]['user_access'] == 1 ){
                                $data = array(
                                    'logged_in'  =>  TRUE,
                                    'username' => $check_login[0]['username'],
                                    'user_access' => $check_login[0]['user_access'],
                                    'user_id' => $check_login[0]['user_id'],
                                    'department_id' => $check_login[0]['dep_id']
                                );
                                $this->session->set_userdata($data);
                                $this->session->set_flashdata('login_passed', 'Super user logged in Successfully...');
                                redirect('dashboard');
                            }

                            elseif($check_login[0]['user_access'] == 0 ){
                                $data = array(
                                    'logged_in'  =>  TRUE,
                                    'username' => $check_login[0]['username'],
                                    'user_access' => $check_login[0]['user_access'],
                                    'user_id' => $check_login[0]['user_id'],
                                    'department_id' => $check_login[0]['dep_id']
                                );
                                $this->session->set_userdata($data);
                                $this->session->set_flashdata('login_passed', 'Department Leader logged in Successfully...');
                                redirect('staff/dashboard');
                            }
                            else{
                                $this->session->set_flashdata('login_failed', 'Sorry, you cant login right now...');
                                redirect('users/login');
                            }
                            
                        
                    }
                    else{
                        $this->session->set_flashdata('no_login', '<small>Invalid Login <br> Please check your username or password...</small>');
                        redirect('users/login');
                    }
                    
                }
                

            }

            // Workers Login from here
            public function worker_login(){
                $data['title'] = "EMS";
                $this->load->model('users_mdl');

                $this->form_validation->set_rules('employee_id', "Employee ID", 'required');

                if($this->form_validation->run() === FALSE){

                    // $this->load->view('templates/user_templates/users_header');
                    $this->load->view('users/worker_login', $data);
                    // $this->load->view('templates/user_templates/users_footer');

                }else{

                    $employee_id = $this->input->post('employee_id');

                    $check_emp_login=$this->users_mdl->worker_logindata($employee_id);
                    if($check_emp_login<>'')
                    {
                        
                        if($check_emp_login[0]['emp_status'] == 1){

                            $data = array(
                                'worker_logged'  =>  TRUE,
                                'emp_name' => $check_emp_login[0]['emp_name'],
                                'emp_id' => $check_emp_login[0]['emp_id'],
                                'employee_id' => $check_emp_login[0]['employee_id'],
                                'emp_image' => $check_emp_login[0]['emp_image'],
                                'emp_status' => $check_emp_login[0]['emp_status'],
                                'dep_id' => $check_emp_login[0]['dep_id']
                            );
    
                            $this->session->set_userdata($data);
                            $this->session->set_flashdata('worker_logged_in', 'You have logged in Successfully...');

                            $this->load->model('workers/chat_mdl');
                            $value = 1;
                            // Update employee chat status
                            $data['active_employees'] = $this->chat_mdl->get_employee_status('employees', $value);// Geting and updating employee chat status
                            redirect('workers/dashboard');

                        }else{

                            $this->session->set_flashdata('worker_resigned', 'Failed: You resigned so you can not login with this ID...');
                            redirect('users/worker_login');
                        }

                            
                            
                    }
                    else{
                        $this->session->set_flashdata('worker_no_login', '<small>Invalid Login <br> Please Check your ID and try again...</small>');
                        redirect('users/worker_login');
                    }
                }
            }


            // Logout User
            public function logout(){
                // Unset user data
                $this->session->unset_userdata('logged_in');
                $this->session->unset_userdata('user_id');
                $this->session->unset_userdata('username');

                // Set flash Message
                $this->session->set_flashdata('logout', 'User Logged Out...');
                redirect('users/login');
            }

                        // Logout Worker
                        public function worker_logout(){
                            // Unset user data

                            $this->load->model('workers/chat_mdl');
                            $value = 0;
                            // Update employee chat status
                            $data['active_employees'] = $this->chat_mdl->get_employee_status('employees', $value);// Geting and updating employee chat status


                            $this->session->unset_userdata('worker_logged');
                            $this->session->unset_userdata('emp_name');
                            $this->session->unset_userdata('emp_id');
                            $this->session->unset_userdata('employee_id');
                            $this->session->unset_userdata('emp_image');
            
                            // Set flash Message
                            $this->session->set_flashdata('worker_logout', 'Worker Logged Out...');
                            redirect('users/worker_login');
                        }

      }