

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
                            
                            $this->users_mdl->register_user('users', $enc_password);
                            
                            // Set Flash Message
                            $this->session->set_flashdata('user_registered', 'User registered you can now login...');
                            redirect('users/login');
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
                    
                    $username = $this->input->post('username');  // Getting the username
                    $password = md5($this->input->post('password'));  //Getting and encrypt the password

                        // Login User
                        $access = $this->users_mdl->login($username, $password);

                            if($access){

                                $user_data = array(
                                    'user_id' => $access,
                                    'username' => $username,
                                    'logged_id' => TRUE
                                );

                                $this->session->set_userdata($user_data);
                                // Set flash Message
                                $this->session->set_flashdata('login_passed', 'User logged in Successfully...');
                                redirect('dashboard');

                            }else{
                                // Set flash Message
                                $this->session->set_flashdata('login_failed', 'Invalid Login Details...');
                                redirect('users/login');
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




            // Check if Username exists or not
            // public function check_username_exists($username){
            //     $this->form_validation->set_message('check_username_exists', '<p style="color: red;">That name is Already Taken</p>');

            //         if ($this->users_model->check_username_exists($username)) {
                        
            //             return true;
            //         }
            //         else{
            //             return false;
            //         }
            // }
      }