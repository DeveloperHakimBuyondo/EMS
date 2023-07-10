
<?php

      class Workers_mdl extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Load Workers from here
            public function get_all_workers_by_status($table_name, $id = FALSE, $status = FALSE, $value = FALSE){
                $this->load->model('database/database_connector');
                    if($id === FALSE){

                        $query = $this->database_connector->call_all_workers_by_status($table_name, $status, $value);
                        return $query;
                    }
                        $this->db->join('departments', 'departments.dep_id = employees.dep_id');
                        $this->db->join('countries', 'countries.country_id = employees.country_id');
                        $query = $this->db->get_where($table_name, array('employees.emp_id' => $id));
                        return $query->row_array();
            }


                        // Get Loans and CV From here
                        public function get_loans_and_cv($table_name, $caller_id){

                            if($table_name === 'loans'){
                                $query = $this->db->get_where($table_name, array('loans.emp_id' => $caller_id));
                                return $query->row_array();

                            }elseif($table_name === 'cv_management'){
                                
                                $query = $this->db->get_where($table_name, array('cv_management.emp_id' => $caller_id));
                                return $query->row_array();
                            }else{
                                return "No table was called";
                            }
                            
        
                            
                    }
      }