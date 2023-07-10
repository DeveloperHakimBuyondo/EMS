

<?php

      class Workers extends Emp{
            // Constructor
            public function __construct(){
                parent:: __construct();
            }

            // Load all workers from here
            public function index(){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('worker_logged')){
                                                redirect('users/worker_login');
                                            }


                $data['title'] = "All Company Workers";
                $this->load->model('workers_mdl');
                $data['workers'] = $this->workers_mdl->get_all_workers_by_status('employees', $id = FALSE, 'emp_status', 1);

                $this->load->view('workers_templates/header', $data);
                $this->load->view('workers', $data);
                $this->load->view('workers_templates/footer');
            }

            // View Each worker's full information from here
            public function view($id){

                                            // Log push user out if not logged in
                                            if(!$this->session->userdata('worker_logged')){
                                                redirect('users/worker_login');
                                            }


                $this->load->model('workers_mdl');
                $data['worker'] = $this->workers_mdl->get_all_workers_by_status('employees', $id);
                $data['cv'] = $this->workers_mdl->get_loans_and_cv('cv_management', $id);
                $data['ln'] = $this->workers_mdl->get_loans_and_cv('loans', $id);

                    if($data['worker'] === FALSE){
                        die('Failed to load an Employee !!!');
                    }else{
                        
                        $data['title'] = $data['worker']['emp_name'];

                        $this->load->view('workers_templates/header', $data);
                        $this->load->view('workers/view', $data);
                        $this->load->view('workers_templates/footer');
                    }
            }


    }