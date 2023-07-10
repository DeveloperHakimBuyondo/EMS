
<?php

      class Dashboard extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Workers Dashboard
            public function index(){

                $this->load->model('system/system_blocker');
                $mac_blocker = $this->system_blocker->get_real_mac_addr();

                    if($mac_blocker === FALSE){
                        echo '<br><br><br><br><br><br><br><center><h1 style="color: red;">E.M.S Is Blocked Please Contact Developer</h1><a href="http://developerbuyondohakim.onlinewebshop.net">Here</a></center>';
                    }else{

                            // Log push user out if not logged in
                            if(!$this->session->userdata('worker_logged')){
                                redirect('users/worker_login');
                            }

                            // Log push user out if not logged in
                            if(!$this->session->userdata('emp_status')){
                                redirect('users/worker_login');
                            }


                            $data['title'] = "Dashboard";
                            $this->load->model('dashboard_mdl');
                            $data['count_pending_leaves'] = $this->dashboard_mdl->get_dashboard_staff_by_where('leaves', 'leave_status', 'emp_id', 'dep_id', 0)->num_rows();
                            $data['count_aproved_leaves'] = $this->dashboard_mdl->get_dashboard_staff_by_where('leaves', 'leave_status', 'emp_id', 'dep_id', 1)->num_rows();
                            $data['count_pending_loans'] = $this->dashboard_mdl->get_dashboard_staff_by_where('loans', 'loan_status', 'emp_id', 'dep_id', 0)->num_rows();
                            $data['count_aproved_loans'] = $this->dashboard_mdl->get_dashboard_staff_by_where('loans', 'loan_status', 'emp_id', 'dep_id', 1)->num_rows();


                            $this->load->view('workers_templates/header', $data);
                            $this->load->view('dashboard', $data);
                            $this->load->view('workers_templates/footer');
                        }


            }

            // Blocking User my System MAC Address
            // public function get_real_mac_addr(){
            //     system('ipconfig /all');
            //     $mycom=ob_get_contents();
            //     $findme = "Physical";
            //     $pmac = strpos($mycom, $findme);
            //     $mac=substr($mycom,($pmac+36),17);
            //     return $mac;
            // }




      }