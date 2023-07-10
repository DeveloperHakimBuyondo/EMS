

<?php

    class Leaves extends Emp{
        // Constructor
        public function __construct(){
            parent:: __construct();
        }

        // Load pending leaves from here
        public function index(){

                            // Log push user out if not logged in
                            if(!$this->session->userdata('worker_logged')){
                                redirect('users/worker_login');
                            }

            $data['title'] = "PENDING LEAVE REQUESTS";
            $this->load->model('leaves_mdl');
            $data['leaves'] = $this->leaves_mdl->get_all_leaves_data_where_id_matches_my_session('leaves', 'leaves.emp_id', 'leave_status', 0);

            $this->load->view('workers_templates/header', $data);
            $this->load->view('workers/leaves', $data);
            $this->load->view('workers_templates/footer');
        }

        // Snding a leave request from here
        public function request(){

                            // Log push user out if not logged in
                            if(!$this->session->userdata('worker_logged')){
                                redirect('users/worker_login');
                            }

            $data['title'] = "Request a Leave";
            $this->load->model('leaves_mdl');
            $data['employees'] = $this->leaves_mdl->get_employees_list('employees');

                $this->form_validation->set_rules('reason', 'Reason', 'required');

                if($this->form_validation->run() === FALSE){
                    
                    $this->load->view('workers_templates/header', $data);
                    $this->load->view('workers/leave_request', $data);
                    $this->load->view('workers_templates/footer');

                }else{
                    
                    $this->leaves_mdl->send_leave_request_from_me('leaves');
                    $this->session->set_flashdata('leave_request_success', 'Leave Rquest was sent successfully...');
                    redirect('workers/leaves');
                }
        }

        // Canceling leave requests from here
        public function cancel_leave($cancel_id){

                            // Log push user out if not logged in
                            if(!$this->session->userdata('worker_logged')){
                                redirect('users/worker_login');
                            }

            $this->load->model('leaves_mdl');
            $this->leaves_mdl->cancel_leave_request('leaves','leave_id', $cancel_id);
            $this->session->set_flashdata('leave_canceled', 'Leave Rquest was Canceled successfully...');
            redirect('workers/leaves');
        }

        // Load Leaves History from here
        public function history(){
            $data['title'] = "Leaves / History";
            $this->load->model('leaves_mdl');
            $data['pending_l'] = $this->leaves_mdl->get_all_leaves_data_for_me('leaves', 'leave_status', 0, 'leaves.emp_id');
            $data['aproved_l'] = $this->leaves_mdl->get_all_leaves_data_for_me('leaves', 'leave_status', 1, 'leaves.emp_id');
            $data['rejected_l'] = $this->leaves_mdl->get_all_leaves_data_for_me('leaves', 'leave_status', 2, 'leaves.emp_id');

            $this->load->view('workers_templates/header', $data);
            $this->load->view('workers/leave_history', $data);
            $this->load->view('workers_templates/footer');
        }
    }