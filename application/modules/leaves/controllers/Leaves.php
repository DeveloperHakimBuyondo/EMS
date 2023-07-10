
<?php

      class Leaves extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Leave requests will be showen from here
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


                    $data['title'] = "LEAVES MANAGEMENT";
                    $this->load->model('leaves_mdl');
                    // $data['leaves'] = $this->leaves_mdl->get_leaves_data('leaves', 'leave_id');
                    $data['leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 0);

                    $this->load->view('templates/header', $data);
                    $this->load->view('leaves', $data);
                    $this->load->view('templates/footer');

                }
            }

            // Request for a leave from here
            public function request(){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                $data['title'] = "LEAVES MANAGEMENT / REQUEST";
                $this->load->model('leaves_mdl');
                $data['employees'] = $this->leaves_mdl->get_employee_data_by_where('employees', 'emp_status', 1);

                    // Form validations
                    $this->form_validation->set_rules('reason', 'Leave Reason', 'required');
                        if($this->form_validation->run() === FALSE){

                            $this->load->view('templates/header', $data);
                            $this->load->view('leaves/request', $data);
                            $this->load->view('templates/footer');
                        }else{
                            $this->leaves_mdl->request_leave('leaves');

                            // Set Flash Message
                            $this->session->set_flashdata('leave_request', 'Leave Request was sent Successfully...');
                            redirect('leaves');
                        }

            }

            // Accept leave request here
            public function accept_leave($id){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                $this->load->model('leaves_mdl');
                $this->leaves_mdl->update_leave_request('leaves', 'leave_id', 1, $id);

                // Set Flash Message
                $this->session->set_flashdata('leave_aprove', 'Leave Request was Successfully Aproved...');
                redirect('leaves');
            }

            // Pending leave request here
            public function pending_leave($id){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                $this->load->model('leaves_mdl');
                $this->leaves_mdl->update_leave_request('leaves', 'leave_id', 0, $id);

                // Set Flash Message
                $this->session->set_flashdata('leave_panding', 'Leave Request was Successfully to pending...');
                redirect('leaves');
            }

            // Reject leave request here
            public function reject_leave($id){

                                // Log push user out if not logged in
                                if(!$this->session->userdata('logged_in')){
                                    redirect('users/login');
                                }

                                // Log push user out if not logged in
                            if(!$this->session->userdata('user_access') == 1){
                                redirect('users/login');
                            }


                $this->load->model('leaves_mdl');
                $this->leaves_mdl->update_leave_request('leaves', 'leave_id', 2, $id);

                // Set Flash Message
                $this->session->set_flashdata('leave_reject', 'Leave Request was Rejected Successfully...');
                redirect('leaves');
            }

            // Leaves History is showing up from here
            public function history(){

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
                                

                    $data['title'] = "LEAVES MANAGEMENT / HISTORY";
                    $this->load->model('leaves_mdl');
                    // $data['leaves'] = $this->leaves_mdl->get_leaves_data('leaves', 'leave_id');
                    // $data['leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 0);

                    $data['pending_leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 0);
                    $data['aproved_leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 1);
                    $data['rejected_leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 2);

                    $this->load->view('templates/header', $data);
                    $this->load->view('leaves/history', $data);
                    $this->load->view('templates/footer');

                }
            }
      }