
<?php

      class Projects extends Emp{
            public function __construct(){
                parent:: __construct();
            }

            // Projects will load up from here
            public function index(){
                $this->load->model('projects_mdl');
                $data['title'] = "PROJECTS MANAGEMENT";
                $data['projects'] = $this->projects_mdl->get_projects_data('projects');

                $this->load->view('templates/header', $data);
                $this->load->view('projects', $data);
                $this->load->view('templates/footer');
            }

            // View Single project record
            public function view($id){
                  $this->load->model('projects_mdl');
                  $data['project'] = $this->projects_mdl->get_projects_data('projects', $id);

                  if(empty($data['project'])){
                        die('Failed');
                  }else{
                        $data['title'] = "PROJECT MANAGEMENT"; //.$data['project']['project_name'];

                        $this->load->view('templates/header', $data);
                        $this->load->view('projects/view', $data);
                        $this->load->view('templates/footer');
                  }
            }

            // Add Projects from here
            public function add(){

                  $this->load->model('projects_mdl');
                  $data['title'] = "PROJECTS MANAGEMENT / ADD";
                  $data['dep'] = $this->projects_mdl->get_projects_data('departments');

                  $this->form_validation->set_rules('project_name', 'Project Name', 'required');
                  // $this->form_validation->set_rules('start_date', 'Start Date', 'required');
                  // $this->form_validation->set_rules('end_date', 'End Date', 'required');
                  $this->form_validation->set_rules('project_description', 'Project Description', 'required');

                  if($this->form_validation->run() === FALSE){

                        $this->load->view('templates/header', $data);
                        $this->load->view('projects/add', $data);
                        $this->load->view('templates/footer');

                  }else{
                        $this->projects_mdl->add_projects_data('projects');

                        // Set Flash Message
                        $this->session->set_flashdata('project_add', 'Project was added Successfully...');
                        redirect('projects');
                  }
            }

            // Edit projects data here
            public function edit($id){
                  $data['title'] = "PROJECTS MANAGEMENT / EDIT";
                  $this->load->model('projects_mdl');
                  $data['get_department'] = $this->projects_mdl->get_projects_data('departments');
                  $data['edit_project'] = $this->projects_mdl->get_projects_data('projects', $id);

                        if(empty($data['edit_project'])){
                              die('Failed');
                        }else{

                              $this->load->view('templates/header', $data);
                              $this->load->view('projects/edit', $data);
                              $this->load->view('templates/footer');
                        }
            }

            // Updating the project data from here
            public function update(){
                  $this->load->model('projects_mdl');
                  $this->projects_mdl->update_project_data('projects', 'project_id');

                  // Set Flash Message
                  $this->session->set_flashdata('project_update', 'Project was updated Successfully...');
                  redirect('projects');
            }

            // Delete Project
            public function delete($id){
                  $this->load->model('projects_mdl');
                  $this->projects_mdl->delete_project('projects', 'project_id', $id);

                  // Set Flash Message
                  $this->session->set_flashdata('project_delete', 'Project was deleted Successfully...');
                  redirect('projects');
            }
      }