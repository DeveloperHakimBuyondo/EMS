

<?php

      class Employees_mdl extends CI_Model{
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Call Database_connector to gett all data from DB
            public function get_employees_data($table_name, $caller_id = FALSE){
                
                if($caller_id === FALSE){

                    $this->load->model('database/database_connector');
                    $query = $this->database_connector->call_all_data($table_name);
                    return $query;

                }

                    $this->db->join('departments', 'departments.dep_id = employees.dep_id');
                    $this->db->join('countries', 'countries.country_id = employees.country_id');

                    if($table_name === 'loans'){
                        $this->db->join('employees', 'employees.emp_id = loans.emp_id', 'left');
                    }elseif($table_name === 'cv_management'){
                        $this->db->join('employees', 'employees.emp_id = cv_management.emp_id', 'left');
                    }else{
                        
                        $query = $this->db->get_where($table_name, array('employees.emp_id' => $caller_id));
                        return $query->row_array();
                    }
                    

                    
            }

                        // Get employees data by where
                        public function get_employees_data_by_where($table_name, $status, $value, $caller_id = FALSE){
                
                            if($caller_id === FALSE){
            
                                $this->load->model('database/database_connector');
                                $query = $this->database_connector->call_all_data_by_where($table_name, $status, $value);
                                return $query;
            
                            }
            
                                $this->db->join('departments', 'departments.dep_id = employees.dep_id');
                                $this->db->join('countries', 'countries.country_id = employees.country_id');
            
                                if($table_name === 'loans'){
                                    $this->db->join('employees', 'employees.emp_id = loans.emp_id', 'left');
                                }elseif($table_name === 'cv_management'){
                                    $this->db->join('employees', 'employees.emp_id = cv_management.emp_id', 'left');
                                }else{
                                    
                                    $query = $this->db->get_where($table_name, array('employees.emp_id' => $caller_id));
                                    return $query->row_array();
                                }
                                
            
                                
                        }

                        // Call Employees data by id_desc
                        public function get_employees_data_by_id_desc($table_name, $id_desc){
                
                            $this->load->model('database/database_connector');
                            $query = $this->database_connector->call_all_data_by_id_desc($table_name, $id_desc);
                            return $query->row_array();
                                
                        }

                        // Get Loans and CV From here
                        public function get_loans_and_cv($table_name, $caller_id){
            
                                if($table_name === 'loans'){
                                    $query = $this->db->get_where($table_name, array('loans.emp_id' => $caller_id));
                                    return $query->row_array();
                                }else{
                                    
                                    $query = $this->db->get_where($table_name, array('cv_management.emp_id' => $caller_id));
                                    return $query->row_array();
                                }
                                
            
                                
                        }
            
            // Adding Employee from here
            public function add_employee($table_name, $emp_image, $prev_id){
                $this->load->model('database/database_connector');
                
                if(empty($prev_id)){
                    $id = 0;
                }else{
                    $id = $prev_id;
                }

                $currency = $this->input->post('currency');
                
                if($currency === "ugx"){
                    $data = array(
                        'emp_image' => $emp_image,
                        'emp_name' => $this->input->post('emp_name'),
                        'emp_nin' => $this->input->post('emp_nin'),
                        'emp_sex' => $this->input->post('emp_sex'),
                        'emp_date_of_birth' => $this->input->post('emp_date_of_birth'),
                        'emp_date_of_joining' => $this->input->post('emp_date_of_joining'),
                        'emp_description' => $this->input->post('emp_description'),
                        'emp_phone' => $this->input->post('emp_phone'),
                        'emp_email' => $this->input->post('emp_email'),
                        'emp_facebook' => $this->input->post('emp_facebook'),
                        'emp_twitter' => $this->input->post('emp_twitter'),
                        'emp_linkedin' => $this->input->post('emp_linkedin'),
                        'emp_instagram' => $this->input->post('emp_instagram'),
                        'emp_address' => $this->input->post('emp_address'),
                        'emp_status' => 1,
                        'chat_status' => 0,
                        'former_employer' => $this->input->post('former_employer'),
                        'date_from' => $this->input->post('former_employer_date_from'),
                        'date_to' => $this->input->post('former_employer_date_to'),
                        'salary' => $this->input->post('emp_salary'),
                        'dollar_salary' => 0,
                        'dep_id' => $this->input->post('department_id'),
                        'education_id' => $this->input->post('education_id'),
                        'country_id' => $this->input->post('country_id'),
                        'employee_id' => "EID000".$id
                    );
    
                    $this->database_connector->add_data($table_name, $data);
                    return true;

                }else{

                    $data = array(
                        'emp_image' => $emp_image,
                        'emp_name' => $this->input->post('emp_name'),
                        'emp_nin' => $this->input->post('emp_nin'),
                        'emp_sex' => $this->input->post('emp_sex'),
                        'emp_date_of_birth' => $this->input->post('emp_date_of_birth'),
                        'emp_date_of_joining' => $this->input->post('emp_date_of_joining'),
                        'emp_description' => $this->input->post('emp_description'),
                        'emp_phone' => $this->input->post('emp_phone'),
                        'emp_email' => $this->input->post('emp_email'),
                        'emp_facebook' => $this->input->post('emp_facebook'),
                        'emp_twitter' => $this->input->post('emp_twitter'),
                        'emp_linkedin' => $this->input->post('emp_linkedin'),
                        'emp_instagram' => $this->input->post('emp_instagram'),
                        'emp_address' => $this->input->post('emp_address'),
                        'emp_status' => 1,
                        'chat_status' => 0,
                        'former_employer' => $this->input->post('former_employer'),
                        'date_from' => $this->input->post('former_employer_date_from'),
                        'date_to' => $this->input->post('former_employer_date_to'),
                        'dollar_salary' => $this->input->post('emp_salary'),
                        'salary' => 0,
                        'dep_id' => $this->input->post('department_id'),
                        'education_id' => $this->input->post('education_id'),
                        'country_id' => $this->input->post('country_id'),
                        'employee_id' => "EID000".$id
                    );
    
                    $this->database_connector->add_data($table_name, $data);
                    return true;
                }


            }

            // Uploading Employee CV
            public function upload_emp_cv($table_name, $emp_cv){
                $this->load->model('database/database_connector');

                // $emp_id = $this->input->post('emp_id');
                    $data = array(
                        'cv_name' => $emp_cv,
                        'emp_id' => $this->input->post('emp_id')
                    );

                    $this->database_connector->add_data($table_name, $data);
                    return true;
            }

            // Updating Employee info from here
            public function update_employee_data($table_name, $update_id, $image){
                $this->load->model('database/database_connector');
                                
                $currency = $this->input->post('currency');

                if($currency === 'ugx'){

                    $data = array(
                        'emp_image' => $image,
                        'emp_name' => $this->input->post('emp_name'),
                        'emp_nin' => $this->input->post('emp_nin'),
                        'emp_sex' => $this->input->post('emp_sex'),
                        'emp_date_of_birth' => $this->input->post('emp_date_of_birth'),
                        'emp_date_of_joining' => $this->input->post('emp_date_of_joining'),
                        'emp_description' => $this->input->post('emp_description'),
                        'emp_phone' => $this->input->post('emp_phone'),
                        'emp_email' => $this->input->post('emp_email'),
                        'emp_facebook' => $this->input->post('emp_facebook'),
                        'emp_twitter' => $this->input->post('emp_twitter'),
                        'emp_linkedin' => $this->input->post('emp_linkedin'),
                        'emp_instagram' => $this->input->post('emp_instagram'),
                        'emp_address' => $this->input->post('emp_address'),
                        'emp_status' => $this->input->post('emp_status'),
                        'former_employer' => $this->input->post('former_employer'),
                        'date_from' => $this->input->post('former_employer_date_from'),
                        'date_to' => $this->input->post('former_employer_date_to'),
                        'salary' => $this->input->post('emp_salary'),
                        'dollar_salary' => 0,
                        'dep_id' => $this->input->post('department_id'),
                        'education_id' => $this->input->post('education_id'),
                        'country_id' => $this->input->post('country_id'),
                        'employee_id' => $this->input->post('employee_id')
                    );
    
                    $id = $this->input->post('id');
                    $this->load->model('database/database_connector');
                    $this->database_connector->update_data($table_name, $update_id, $id, $data);
                    return true;
                }else{

                    $data = array(
                        'emp_image' => $image,
                        'emp_name' => $this->input->post('emp_name'),
                        'emp_nin' => $this->input->post('emp_nin'),
                        'emp_sex' => $this->input->post('emp_sex'),
                        'emp_date_of_birth' => $this->input->post('emp_date_of_birth'),
                        'emp_date_of_joining' => $this->input->post('emp_date_of_joining'),
                        'emp_description' => $this->input->post('emp_description'),
                        'emp_phone' => $this->input->post('emp_phone'),
                        'emp_email' => $this->input->post('emp_email'),
                        'emp_facebook' => $this->input->post('emp_facebook'),
                        'emp_twitter' => $this->input->post('emp_twitter'),
                        'emp_linkedin' => $this->input->post('emp_linkedin'),
                        'emp_instagram' => $this->input->post('emp_instagram'),
                        'emp_address' => $this->input->post('emp_address'),
                        'emp_status' => $this->input->post('emp_status'),
                        'former_employer' => $this->input->post('former_employer'),
                        'date_from' => $this->input->post('former_employer_date_from'),
                        'date_to' => $this->input->post('former_employer_date_to'),
                        'dollar_salary' => $this->input->post('emp_salary'),
                        'salary' => 0,
                        'dep_id' => $this->input->post('department_id'),
                        'education_id' => $this->input->post('education_id'),
                        'country_id' => $this->input->post('country_id'),
                        'employee_id' => $this->input->post('employee_id')
                    );
    
                    $id = $this->input->post('id');
                    $this->load->model('database/database_connector');
                    $this->database_connector->update_data($table_name, $update_id, $id, $data);
                    return true;
                }

            }

            // Delete Employee record / row from here
            public function delete_employee_record($table_name, $table_id, $id){
                $this->load->model('database/database_connector');
                $this->database_connector->delete_data($table_name, $table_id, $id);
                return true;
            }

            // Search employee id from here
            public function search_employee_id($table_name, $employee_id, $emp_status, $value = FALSE){
                $this->load->model('database/database_connector');
                
                $search = $this->input->post('search');
                $query = $this->database_connector->search_employee_id($table_name, $employee_id, $search, $emp_status, $value);
                return $query;
            }
      }