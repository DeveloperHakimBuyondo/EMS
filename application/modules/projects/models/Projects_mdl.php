
<?php

      class Projects_mdl extends CI_Model{
            // Constuctor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            //Get all Projects data from here
            public function get_projects_data($table_name, $id = FALSE){
                $this->load->model('database/database_connector');
                // $this->db->order_by('project.project_id');
                    if($id === FALSE){

                        if($table_name === 'departments'){
                            // $this->db->join('projects', 'projects.dep_id = departments.dep_id');
                            $query = $this->database_connector->call_all_data($table_name);
                            return $query;
                        }else{

                        $this->db->order_by('project_id');
                        $this->db->join('departments', 'departments.dep_id = projects.dep_id');
                        $query = $this->database_connector->call_all_data($table_name);
                        return $query;
                        }

                    }
                        $this->db->join('departments', 'departments.dep_id = projects.dep_id');
                        $query = $this->db->get_where($table_name, array('project_id' => $id));
                        return $query->row_array();

            }

            public function add_projects_data($table_name){
                $this->load->model('database/database_connector');
                $data = array(
                    'project_name' => $this->input->post('project_name'),
                    'start_date' => $this->input->post('start_date'),
                    'close_date' => $this->input->post('close_date'),
                    'dep_id' => $this->input->post('dep_id'),
                    'project_description' => $this->input->post('project_description'),
                    'project_status' => $this->input->post('project_status')
                );
                    $this->database_connector->add_data($table_name, $data);
                    return true;
            }

            // Updateing project data fron here
            public function update_project_data($table_name, $update_id){
                $data = array(
                    'project_name' => $this->input->post('project_name'),
                    'start_date' => $this->input->post('start_date'),
                    'close_date' => $this->input->post('close_date'),
                    'dep_id' => $this->input->post('dep_id'),
                    'project_description' => $this->input->post('project_description'),
                    'project_status' => $this->input->post('project_status'),
                    'user_access' => $this->session->userdata('user_access')
                );

                $id = $this->input->post('id');
                $this->load->model('database/database_connector');
                $this->database_connector->update_data($table_name, $update_id, $id, $data);
                return true;
            }

            // Delete project from here
            public function delete_project($table_name, $delete_id, $id){
                $this->load->model('database/database_connector');
                $this->database_connector->delete_data($table_name, $delete_id, $id);
                return true;
            }
      }