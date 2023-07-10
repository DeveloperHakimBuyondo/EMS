
<?php

      class Salary_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Manage Salary from here
            public function manage_salary($table_name, $status, $value, $id = FALSE){
                $this->load->model('database/database_connector');
                    if($id === FALSE){

                        $this->db->join('departments', 'departments.dep_id = employees.dep_id');
                        $query = $this->database_connector->call_all_data_by_where($table_name, $status, $value);
                        return $query;
                    }
                        $query = $this->db->get_where($table_name, array($table_id => $id));
                        return $query->row_array();
            }



                        // Get all Salary and calculate from here
                        public function get_salary_data($table_name, $table_id, $id = FALSE){
                            $this->load->model('database/database_connector');
                                if($id === FALSE){
            
                                    $query = $this->database_connector->get_salary($table_name);
                                    return $query;
                                }
                                    $query = $this->db->get_where($table_name, array($table_id => $id));
                                    return $query->row_array();
                        }

                        // Get salary requests from here
                        public function get_salary_requests_for_me($table_name){
                            $this->load->model('database/database_connector');

                            $id = $this->session->userdata('dep_id');
                            $query = $this->database_connector->get_employees_salary_requests($table_name);
                            return $query;
                        }



                        // Reject Salary requests
                        public function reject_request($table_name, $update_id){
                            $this->load->model('database/database_connector');
                                            
                            $data = array(
                                'status' => 2,
                                'user_access' => $this->session->userdata('user_access'),
                            );
            
                            $id = $this->input->post('id');
                            $this->database_connector->update_data($table_name, $update_id, $id, $data);
                            return true;
            
                        }

                        // Agree on Salary Requests
                        public function agree($table_name, $update_id){
                            $this->load->model('database/database_connector');
                                            
                            $data = array(
                                'status' => 3,
                                'user_access' => $this->session->userdata('user_access'),
                            );
            
                            $id = $this->input->post('id');
                            $this->database_connector->update_data($table_name, $update_id, $id, $data);
                            return true;
            
                        }



            // Updating Employee info from here
            public function update_salary($table_name, $update_id, $image){
                $this->load->model('database/database_connector');
                                
                $data = array(
                    'emp_image' => $image,
                    'salary' => $this->input->post('salary')
                );

                $id = $this->input->post('id');
                $this->database_connector->update_data($table_name, $update_id, $id, $data);
                return true;

            }
      }