
<?php

      class Leaves extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Leave requests will be showen from here
            public function index(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }


                $data['title'] = "LEAVES MANAGEMENT";
                $this->load->model('leaves_mdl');
                // $data['leaves'] = $this->leaves_mdl->get_leaves_data('leaves', 'leave_id');
                $data['leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 0);

                $this->load->view('staff_templates/header', $data);
                $this->load->view('leaves/staff_leaves', $data);
                $this->load->view('staff_templates/footer');
            }

            // Request for a leave from here
            public function request(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }

                                            
                $data['title'] = "LEAVES MANAGEMENT / REQUEST";
                $this->load->model('leaves_mdl');
                $data['employees'] = $this->leaves_mdl->get_employee_data_by_where('employees', 'emp_status', 1);

                    // Form validations
                    $this->form_validation->set_rules('reason', 'Leave Reason', 'required');
                        if($this->form_validation->run() === FALSE){

                            $this->load->view('staff_templates/header', $data);
                            $this->load->view('leaves/staff_request', $data);
                            $this->load->view('staff_templates/footer');
                        }else{
                            $this->leaves_mdl->request_leave('leaves');

                            // Set Flash Message
                            $this->session->set_flashdata('leave_request', 'Leave Request was sent Successfully...');
                            redirect('staff/leaves');
                        }

            }

            // Accept leave request here
            public function accept_leave($id){
                $this->load->model('leaves_mdl');
                $this->leaves_mdl->update_leave_request('leaves', 'leave_id', 1, $id);

                // Set Flash Message
                $this->session->set_flashdata('leave_aprove', 'Leave Request was Successfully Aproved...');
                redirect('staff/leaves');
            }

            // Pending leave request here
            public function pending_leave($id){
                $this->load->model('leaves_mdl');
                $this->leaves_mdl->update_leave_request('leaves', 'leave_id', 0, $id);

                // Set Flash Message
                $this->session->set_flashdata('leave_panding', 'Leave Request was Successfully to pending...');
                redirect('staff/leaves');
            }

            // Reject leave request here
            public function reject_leave($id){
                $this->load->model('leaves_mdl');
                $this->leaves_mdl->update_leave_request('leaves', 'leave_id', 2, $id);

                // Set Flash Message
                $this->session->set_flashdata('leave_reject', 'Leave Request was Rejected Successfully...');
                redirect('staff/leaves');
            }

            // Leaves History is showing up from here
            public function history(){

                $data['title'] = "LEAVES MANAGEMENT / HISTORY";
                $this->load->model('leaves_mdl');
                // $data['leaves'] = $this->leaves_mdl->get_leaves_data('leaves', 'leave_id');
                // $data['leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 0);

                $data['pending_leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 0);
                $data['aproved_leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 1);
                $data['rejected_leaves'] = $this->leaves_mdl->get_leaves_data_by_where('leaves', 'leave_status', 2);

                $this->load->view('staff_templates/header', $data);
                $this->load->view('leaves/staff_history', $data);
                $this->load->view('staff_templates/footer');
            }
      }