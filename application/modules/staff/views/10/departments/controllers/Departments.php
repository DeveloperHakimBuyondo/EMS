
<?php

      class Departments extends Emp{
            public function __construct(){
                parent:: __construct();
            }

            // Departments will show up from here
            public function index(){
                $data['title'] = "MANAGE DEPARTMENTS";
                $this->load->model('departments_mdl');
                $data['departments'] = $this->departments_mdl->get_departments_data('departments');

                $this->load->view('templates/header', $data);
                $this->load->view('departments', $data);
                $this->load->view('templates/footer');
            }

            // Add departments from here
            public function add(){
                $data['title'] = "MANAGE DEPARTMENTS / ADD";
                $this->load->model('departments_mdl');

                    $this->form_validation->set_rules('dep_name', 'Department Name', "required");
                        if($this->form_validation->run() === FALSE){
                            
                            $this->load->view('templates/header', $data);
                            $this->load->view('departments/add', $data);
                            $this->load->view('templates/footer');
                            
                        }else{
                            $this->departments_mdl->add_departments_data('departments');

                            // Set Flash Message
                            $this->session->set_flashdata('department_added', 'Department was Successfully added...');
                            redirect('departments');
                        }
            }

            // Edit department data here
            public function edit($id){
                $data['title'] = "MANAGE DEPARTMENTS / EDIT";
                $this->load->model('departments_mdl');
                $data['edit_dep'] = $this->departments_mdl->get_departments_data('departments', $id);

                    if(empty($data['edit_dep'])){
                        die('Failed');
                    }else{
                        $this->load->view('templates/header', $data);
                        $this->load->view('departments/edit', $data);
                        $this->load->view('templates/footer');
                    }

            }

            // Update Department
            public function update(){
                $this->load->model('departments_mdl');
                $this->departments_mdl->update_department_data('departments', 'dep_id');

                // Set Flash Message
                $this->session->set_flashdata('department_updated', 'Department was Successfully Updated...');
                redirect('departments');
            }

            // Delete Department here
            public function delete($id){
                $this->load->model('departments_mdl');
                $this->departments_mdl->delete_department('departments', 'dep_id', $id);

                // Set Flash Message
                $this->session->set_flashdata('department_deleted', 'Department was Successfully deleted...');
                redirect('departments');
            }
      }