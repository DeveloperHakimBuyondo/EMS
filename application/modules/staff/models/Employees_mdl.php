

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

            // Search employee id from here
            public function search_employee_id($table_name, $employee_id, $emp_status, $value = FALSE){
                $this->load->model('database/database_connector');
                
                $search = $this->input->post('search');
                $query = $this->database_connector->search_employee_id($table_name, $employee_id, $search, $emp_status, $value);
                return $query;
            }
      }