
<?php

      class Projects extends Emp{
            public function __construct(){
                parent:: __construct();
            }

            // Projects will load up from here
            public function index(){

                                              // Log push user out if not logged in
                                              if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }


                $this->load->model('projects_mdl');
                $data['title'] = "PROJECTS MANAGEMENT";
                $data['projects'] = $this->projects_mdl->get_projects_data('projects');

                $this->load->view('staff_templates/header', $data);
                $this->load->view('projects/staff_projects', $data);
                $this->load->view('staff_templates/footer');
            }

            // View Single project record
            public function view($id){

                                              // Log push user out if not logged in
                                              if(!$this->session->userdata('logged_in')){
                                                redirect('users/login');
                                            }


                  $this->load->model('projects_mdl');
                  $data['project'] = $this->projects_mdl->get_projects_data('projects', $id);

                  if(empty($data['project'])){
                        die('Failed');
                  }else{
                        $data['title'] = "PROJECT MANAGEMENT"; //.$data['project']['project_name'];

                        $this->load->view('staff_templates/header', $data);
                        $this->load->view('projects/view_project', $data);
                        $this->load->view('staff_templates/footer');
                  }
            }

            // Repot project ststus from here
            public function report($id){

                                          // Log push user out if not logged in
                                          if(!$this->session->userdata('logged_in')){
                                          redirect('users/login');
                                          }

                  $data['title'] = "Report Project Status";
                  $this->load->model('projects_mdl');
                  $data['edit_project'] = $this->projects_mdl->get_projects_data('projects', $id);

                        $this->form_validation->set_rules('close_date', 'Close Date', 'required');
                        
                        if($this->form_validation->run() === FALSE){

                              $this->load->view('staff_templates/header', $data);
                              $this->load->view('projects/report_project', $data);
                              $this->load->view('staff_templates/footer');
                        }else{

                              $this->projects_mdl->report_project('projects', 'project_id');
                              redirect('staff/projects');
                        }
            }
      }