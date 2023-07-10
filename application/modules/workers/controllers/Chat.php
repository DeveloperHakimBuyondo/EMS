

<?php

      class Chat extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Load Chat here
            // public function index($employee_id = FALSE){
            //     $this->load->model('chat_mdl');
            //     $data['title'] = "Chat Room";
            //     $data['get_workers'] = $this->chat_mdl->get_chat_data('employees');
            //     $data['get_messages'] = $this->chat_mdl->get_chat_data('workers_chat');

            //     $this->load->view('workers_templates/header', $data);
            //     $this->load->view('workers/chat', $data);
            //     $this->load->view('workers_templates/footer');
            // }

            // Chat Here
            public function chat_room($employee_id){


                            // Log push user out if not logged in
                            if(!$this->session->userdata('worker_logged')){
                                redirect('users/worker_login');
                            }

                            // Log push user out if not logged in
                            if(!$this->session->userdata('emp_status')){
                                redirect('users/worker_login');
                            }


                $this->load->model('chat_mdl');
                $data['title'] = "Group Chat";
                $data['get_workers'] = $this->chat_mdl->get_chat_data('employees');
                $data['get_active_workers'] = $this->chat_mdl->count_active_workers('employees', 'chat_status', 1);
                // $data['count_workers'] = $this->chat_mdl->get_chat_data('employees')->num_rows();
                $data['count_active_workers'] = $this->chat_mdl->count_active_workers('employees', 'chat_status', 1)->num_rows();
                $data['count_workers'] = $this->chat_mdl->count_active_workers('employees', 'emp_status', 1)->num_rows();
                // $data['get_workers'] = $this->chat_mdl->get_chat_data('employees', 'employee_id', $employee_id);
                // $data['get_receiver'] = $this->chat_mdl->get_chat_data('workers_chat', 'receiver_id', $employee_id);
                $data['get_employees'] = $this->chat_mdl->get_employees_data('employees', $employee_id);

                // $receiver = $data['get_receiver']['receiver_id'];
                $session_sender = $this->session->userdata('employee_id');
                $data['messages'] = $this->chat_mdl->get_messages('workers_chat');

                // Update employee chat status
                //$data['active_employees'] = $this->chat_mdl->get_employee_status('employees', $value);

                $this->load->view('workers_templates/header', $data);
                $this->load->view('workers/chat_room', $data);
                $this->load->view('workers_templates/footer');
            }

            // Send Message from here
            public function send_message($receiver_id){

                            // Log push user out if not logged in
                            if(!$this->session->userdata('worker_logged')){
                                redirect('users/worker_login');
                            }

                            // Log push user out if not logged in
                            if(!$this->session->userdata('emp_status')){
                                redirect('users/worker_login');
                            }


                $this->load->model('chat_mdl');

                // Send a File
                $config['upload_path'] = "./assets/assets/chat/employees/employee_chat_files/";
                $config['allowed_types'] = "mp4|mp3|m4a|aac|wma|mav|flac";
                $config['max_size'] = "2000";
                // $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    $chat_file = "aud";
                }else{
                    $data = array('upload_data' => $this->upload->data());
                    $chat_file = $_FILES['userfile']['name'];
                }
                $this->chat_mdl->send_message('workers_chat', $receiver_id, $chat_file);

                $session_sender = $this->session->userdata('employee_id');
                redirect('workers/chat/chat_room/'.$session_sender);
            }

            // Delete Message from here
            public function delete_message($chat_id){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('worker_logged')){
                                                redirect('users/worker_login');
                                            }
                
                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('emp_status')){
                                                redirect('users/worker_login');
                                            }


                $this->load->model('chat_mdl');
                $employee_id = $this->session->userdata('employee_id');
                $this->chat_mdl->delete_message('workers_chat', 'workers_chat_id', $chat_id, 'sender_id', $employee_id);
                redirect('workers/chat/chat_room/'.$employee_id);
            }
      }