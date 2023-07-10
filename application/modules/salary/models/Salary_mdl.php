
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



            // Updating Employee info from here
            public function update_salary($table_name, $update_id, $image){
                $this->load->model('database/database_connector');
                
                $id = $this->input->post('id');
                $query['sal'] = $this->database_connector->get_employee_salary_and_increase($table_name, $update_id, $id)->row_array();  

                $get_input = $this->input->post('salary');
                $get_salary = $query['sal']['salary'];
                $get_dollar_salary = $query['sal']['dollar_salary'];
                

                if($get_salary == 0){

                    $active_sal = $get_dollar_salary + $get_input;
                    $data = array(
                        'emp_image' => $image,
                        'dollar_salary' => $active_sal,
                    );
                }else{
                    $active_sal = $get_salary + $get_input;
                    $data = array(
                        'emp_image' => $image,
                        'salary' => $active_sal,
                    );
                }


                $this->database_connector->update_data($table_name, $update_id, $id, $data);


                $sal = array(
                    'status' => 1,
                    'user_access' => $this->session->userdata('user_access')
                );

                $id = $this->input->post('id');
                $this->database_connector->update_data('salary_increment_request', $update_id, $id, $sal);
                return true;

            }

                        // Updating Employee info from here
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


            // Search employee id from here
            public function search_employee_id($table_name, $employee_id, $emp_status, $value){
                $this->load->model('database/database_connector');
                
                $search = $this->input->post('search');
                $this->db->join('departments', 'departments.dep_id = employees.dep_id');
                $query = $this->database_connector->search_employee_id($table_name, $employee_id, $search, $emp_status, $value);
                return $query;
            }


            // Getting all employees salary request from here
            public function get_employees_salary_requests($table_name){
                $this->load->model('database/database_connector');

                
                $query = $this->database_connector->get_employees_salary_requests($table_name);
                return $query;
            }
      }